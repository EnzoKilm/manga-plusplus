<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Manga++</a></li>
                    <li class="active">Profil</li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="profile_content">
            <div class="container">
                <div class="profile-center">
                    <h1>Mon profil</h1>
                    <img src="{{ URL::to('/') }}/public_site/images/home/profil_anime.png" class="profile-img">

                    <div class="profile-informations">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Abonnement</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if ($user->subscription_id == NULL)
                                        <td>Aucun</td>
                                    @else
                                        <td>{{ $user->subscriptions->name }}</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section> <!--/#profile_content-->

        @include('footer')
    </body>
</html>
