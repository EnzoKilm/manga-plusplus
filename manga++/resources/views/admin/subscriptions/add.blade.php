<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('admin/header')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ajout d'un abonnement</h1>
        <form method="post" action="{{ route('admin.subscriptions.store') }}">
            @csrf

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nom de l'abonnement</h6>
                </div>
                <div class="card-body">
                    <input type="text" name="name" placeholder="Nom">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Periodicité de l'abonnement</h6>
                </div>
                <div class="card-body">
                    <select name="periodicity" size="1">
                        <option value="Mois">Mois</option>
                        <option value="Année">Année</option>
                    </select>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nombre de livres gratuits grâce à l'abonnement</h6>
                </div>
                <div class="card-header py-3">
                    <input type="number" name="free_count" step=1 placeholder="Exemple : 10">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">L'abonnement est-il à la carte ?</h6>
                </div>
                <div class="card-header py-3">
                    <select name="customizable" size="1">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                    </select>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Remise de l'abonnement (si il est à la carte)</h6>
                </div>
                <div class="card-header py-3">
                    <input type="number" name="discount" step=0.01 max="100" placeholder="Exemple: 20">
                    <select name="discount_type" size="1">
                        <option value="€">€</option>
                        <option value="%">%</option>
                    </select>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Prix de l'abonnement</h6>
                </div>
                <div class="card-header py-3">
                    <input type="number" name="price" step=0.01 min="0" placeholder="Exemple: 12,5">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <button type="submit">Ajouter</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->

    @include('admin/footer')

</html>
