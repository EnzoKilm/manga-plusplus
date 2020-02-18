<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Book;
use App\Location;
use Carbon\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
                 ->hourly();

        $schedule->call(function () {
            $books = Book::all();
            foreach($books as $book) {
                $location = Location::find($book->id);
                $diff_retrait = new Carbon($location->date_retrait);
                if($diff_retrait->diffInDays(Carbon::now()) < 7) {
                    $book->availability = true;
                    $book->save();
                }
            }
        })->hourly();

        $schedule->call(function () {
            $locations = Location::all();
            foreach($locations as $location) {
                if($location->ramenee != true) {
                    $retour_max = new Carbon($location->date_max);
                    $temps_passe_max = \Carbon\Carbon::createFromTimestampUTC($retour_max)->diffInSeconds();
                    $temps_passe_actuel = \Carbon\Carbon::createFromTimestampUTC(Carbon::now()->addDays(2))->diffInSeconds();
                    if($temps_passe_max - $temps_passe_actuel < 0) {
                        Location::sendBookReturnNotification();
                    }
                }
            }
        })->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
