<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('admin/header')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Locations</h1>
        <p class="mb-4">Ici vous pouvez voir l'état des retraits des différentes locations.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Retraits et emprunts</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Livre</th>
                    <th>Client</th>
                    <th>Date de retrait</th>
                    <th>Date de retour maximum</th>
                    <th>Commande retirée</th>
                    <th>Commande ramenée</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Livre</th>
                    <th>Client</th>
                    <th>Date de retrait</th>
                    <th>Date de retour maximum</th>
                    <th>Commande retirée</th>
                    <th>Commande ramenée</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($locations as $location)
                <tr>
                    <td>{{ $location->book->name }}</a></td>
                    <td>{{ $location->user->lastname.' '.$location->user->firstname }}</td>
                    <td>{{ $location->date_retrait }}</td>
                    <td>{{ $location->date_max }}</td>
                    <td>
                        @if ($location->retiree == 0)
                            <a href="{{ route('admin.locations.retiree.validation', $location->id) }}" style="color: red;">Non</a>
                        @else
                            <a href="{{ route('admin.locations.retiree.annulation', $location->id) }}" style="color: green;">Oui</a>
                        @endif
                    </td>
                    <td>
                        @if ($location->ramenee == 0)
                            <a href="{{ route('admin.locations.ramenee.validation', $location->id) }}" style="color: red;">Non</a>
                        @else
                            <a href="{{ route('admin.locations.ramenee.annulation', $location->id) }}" style="color: green;">Oui</a>
                        @endif
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
