<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('admin/header')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Clients</h1>
        <p class="mb-4">Ici vous pouvez voir tous les utilisateurs enregistrés sur le site.<br/>Pour modifier un utilisateur vous devez simplement cliquer sur son nom dans le tableau ci-dessous.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Utilisateurs enregistrés</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Abonnement</th>
                    <th>Crée le</th>
                    <th><i class="fas fa-trash-alt"></i></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Abonnement</th>
                    <th>Crée le</th>
                    <th><i class="fas fa-trash-alt"></i></th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td><a href="{{ route('admin.clients.edit', $user->id) }}">{{ $user->lastname }}</a></td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->email }}</td>
                    <?php
                        if(!isset($user->subscriptions->id)) {
                            echo '<td>Aucun</td>';
                        } else {
                            echo '<td>'.$user->subscriptions->name.'</td>';
                        }
                    ?>
                    <td>{{ $user->created_at }}</td>
                    <td><a href="{{ route('admin.clients.delete', $user->id) }}" title="supprimer l'utilisateur">Supprimer</a></td>
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
