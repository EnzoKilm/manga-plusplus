<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('admin/header')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Abonnements</h1>
        <p class="mb-4">Ici vous pouvez voir tous les utilisateurs enregistrés sur le site.<br/>Pour modifier un utilisateur vous devez simplement cliquer sur une de ses informations dans le tableau ci-dessous.</p>

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
                    <th>Périodicité</th>
                    <th>Nombre de livres gratuits</th>
                    <th>A la carte</th>
                    <th>Réduction</th>
                    <th>Prix</th>
                    <th><i class="fas fa-trash-alt"></i></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Nom</th>
                    <th>Périodicité</th>
                    <th>Nombre de livres gratuits</th>
                    <th>A la carte</th>
                    <th>Réduction</th>
                    <th>Prix</th>
                    <th><i class="fas fa-trash-alt"></i></th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($subscriptions as $subscription)
                <tr>
                    <td><a href="{{ route('admin.subscriptions.edit', $subscription->id) }}">{{ $subscription->name }}</a></td>
                    <td>{{ $subscription->periodicity }}</td>
                    <td>{{ $subscription->free_count }}</td>
                    <td>
                        <?php
                            if($subscription->customizable == "0") {
                                echo "Non";
                            } else {
                                echo "Oui";
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if($subscription->discount != null) {
                                echo $subscription->discount.$subscription->discount_type;
                            } else {
                                echo "Aucune";
                            }
                        ?>
                    </td>
                    <td>{{ $subscription->price }}€</td>
                    <td><a href="{{ route('admin.subscriptions.delete', $subscription->id) }}" title="supprimer la recette">Supprimer</a></td>
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
