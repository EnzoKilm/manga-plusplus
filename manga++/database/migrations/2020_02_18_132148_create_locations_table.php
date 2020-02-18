<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('book_id')->unsigned();
            $table->foreign('book_id')
                    ->references('id')
                    ->on('book')
                    ->onDelete('SET NULL');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user')
                    ->onDelete('SET NULL');
            $table->timestamp('date_retrait');
            $table->timestamp('date_max');
            $table->boolean('retiree')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
