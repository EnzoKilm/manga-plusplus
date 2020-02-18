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
                    <th>ID du livre</th>
                    <th>Date de mouvement</th>
                    <th>Sens</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID du livre</th>
                    <th>Date de mouvement</th>
                    <th>Sens</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($locations as $location)
                <tr>
                    <td>{{ $location->book->id }}</a></td>

                    <?php
                        $currentDate = Carbon\Carbon::now();
                        echo '<td>'.$currentDate.'</td>';
                        $diff = $currentDate->diffInDays($location->date_retrait);
                    ?>

                    <td>{{ $diff }}</td>

                    {{-- <td>{{ $location->date_retrait }}</td>
                    <td>{{ $location->date_max }}</td> --}}

                    {{-- <td>
                        @if ($location->retiree == 0)
                            <a href="{{ route('admin.locations.validation', $location->id) }}" style="color: red;">Non</a>
                        @else
                            <a href="{{ route('admin.locations.annulation', $location->id) }}" style="color: green;">Oui</a>
                        @endif
                    </td> --}}
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
