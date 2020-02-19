<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('admin/header')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Mouvements</h1>
        <p class="mb-4">Ici vous pouvez voir les mouvements des livres appartenant au stock de l'entreprise.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Entrées et sorties</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Date de mouvement</th>
                    <th>Sens</th>
                    <th>Livre</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Date de mouvement</th>
                    <th>Sens</th>
                    <th>Livre</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($locations as $location)
                <tr>
                    <?php
                        $date = Carbon\Carbon::now();
                        $retrait = new Carbon\Carbon($location->date_retrait);
                        $retour = new Carbon\Carbon($location->date_max);

                        $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                        $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
                        $mois = ['janvier', 'févrirer', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
                        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

                        if($location->ramenee != true) {
                            $dayPos = array_search($retrait->format('D'),$days);
                            $date = $jours[$dayPos].' '.$retrait->day.' ';
                            $monthPos = array_search($retrait->format('F'),$months);
                            $date .= $mois[$monthPos].' '.$retrait->year;

                            echo '<td>'.$date.'</td>';
                            echo '<td><i class="fas fa-long-arrow-alt-left" style="color: red;"></i></td>';
                        } else {
                            $dayPos = array_search($retour->format('D'),$days);
                            $date = $jours[$dayPos].' '.$retour->day.' ';
                            $monthPos = array_search($retour->format('F'),$months);
                            $date .= $mois[$monthPos].' '.$retour->year;

                            echo '<td>'.$date.'</td>';
                            echo '<td><i class="fas fa-long-arrow-alt-right" style="color: green;"></i></td>';
                        }
                    ?>
                    <td>
                        <p>{{ $location->book->name }}</p>
                        <p class="float:right;">ID# {{ $location->book->id }}</p>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    @include('admin/footer')

</html>
