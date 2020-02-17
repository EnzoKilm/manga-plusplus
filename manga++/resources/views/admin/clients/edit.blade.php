<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('admin/header')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Modification de l'utilisateur n°{{ $user->id }}</h1>
        <form method="post" action="{{ route('admin.clients.update', $user->id) }}">
            @csrf

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nom de l'utilisateur</h6>
                </div>
                <div class="card-body">
                    <input type="text" name="lastname" placeholder="Nom" value="{{ $user->lastname }}">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Prénom de l'utilisateur</h6>
                </div>
                <div class="card-body">
                    <input type="text" name="firstname" placeholder="Prénom" value="{{ $user->firstname }}">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Email de l'utilisateur</h6>
                </div>
                <div class="card-body">
                    <input type="text" name="email" placeholder="Nom" value="{{ $user->email }}">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Abonnement de l'utilisateur</h6>
                </div>
                <div class="card-body">
                    <select name="subscription_id" size="1"><option value="0" selected="selected">Aucun</option>
                        @foreach($subscriptions as $subscription)
                            @if ($user->subscription_id === $subscription->id)
                                <option value="{{ $subscription->id }}" selected="selected">{{ $subscription->name }}</option>
                            @else
                            <option value="{{ $subscription->id }}">{{ $subscription->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <button type="submit">Mettre à jour</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->

    @include('admin/footer')

</html>
