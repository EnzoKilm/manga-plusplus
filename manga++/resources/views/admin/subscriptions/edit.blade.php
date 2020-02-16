<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('admin/header')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Modification de l'abonnement n°{{ $subscription->id }}</h1>
        <form method="post" action="{{ route('admin.subscriptions.update', $subscription->id) }}">
            @csrf

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nom de l'abonnement</h6>
                </div>
                <div class="card-body">
                    <input type="text" name="name" placeholder="Nom" value="{{ $subscription->name }}">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Periodicité de l'abonnement</h6>
                </div>
                <div class="card-body">
                    <select name="periodicity" size="1">
                        <?php
                            if($subscription->periodicity == "Mois") {
                                echo '<option value="Mois" selected="selected">Mois</option>';
                                echo '<option value="Année">Année</option>';
                            } else {
                                echo '<option value="Mois">Mois</option>';
                                echo '<option value="Année" selected="selected">Année</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nombre de livres gratuits grâce à l'abonnement</h6>
                </div>
                <div class="card-header py-3">
                    <input type="number" name="free_count" step=1 placeholder="Exemple : 10"  value="{{ $subscription->free_count }}">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">L'abonnement est-il à la carte ?</h6>
                </div>
                <div class="card-header py-3">
                    <select name="customizable" size="1">
                        <?php
                            if($subscription->customizable == 0) {
                                echo '<option value="0" selected="selected">Non</option>';
                                echo '<option value="1">Oui</option>';
                            } else {
                                echo '<option value="0">Non</option>';
                                echo '<option value="1" selected="selected">Oui</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Remise de l'abonnement (si il est à la carte)</h6>
                </div>
                <div class="card-header py-3">
                    <input type="number" name="discount" step=0.01 max="100" placeholder="Exemple: 20" value="{{ $subscription->discount }}">
                    <select name="discount_type" size="1">
                        <?php
                            if($subscription->discount_type == "€") {
                                echo '<option value="€" selected="selected">€</option>';
                                echo '<option value="%">%</option>';
                            } else {
                                echo '<option value="€">€</option>';
                                echo '<option value="%" selected="selected">%</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Prix de l'abonnement</h6>
                </div>
                <div class="card-header py-3">
                    <input type="number" name="price" step=0.01 min="0" placeholder="Exemple: 12,5"  value="{{ $subscription->price }}">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <button type="submit">Mettre à jour</button>
                    <button type="submit">Mettre à jour</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->

    @include('admin/footer')

</html>
