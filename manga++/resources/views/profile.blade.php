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
                <div class="profile-center-locations">
                    <div class="profile-informations">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Livre</th>
                                    <th>Date de retrait</th>
                                    <th>Date de retour</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($locations != null)
                                    @foreach ($locations as $location)
                                        <tr>
                                            <td>{{ $location->id }}</td>
                                            <td>{{ $location->book->name }}</td>
                                            <?php
                                                $date = Carbon\Carbon::now();
                                                $retrait = new Carbon\Carbon($location->date_retrait);
                                                $retour = new Carbon\Carbon($location->date_max);

                                                $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                                                $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
                                                $mois = ['janvier', 'févrirer', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
                                                $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

                                                $dayPos = array_search($retrait->format('D'),$days);
                                                $date = $jours[$dayPos].' '.$retrait->day.' ';
                                                $monthPos = array_search($retrait->format('F'),$months);
                                                $date .= $mois[$monthPos].' '.$retrait->year;
                                                echo '<td>'.$date.' : 12h00</td>';

                                                $dayPos = array_search($retour->format('D'),$days);
                                                $date = $jours[$dayPos].' '.$retour->day.' ';
                                                $monthPos = array_search($retour->format('F'),$months);
                                                $date .= $mois[$monthPos].' '.$retour->year;
                                                echo '<td>'.$date.' : 12h00</td>';
                                            ?>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4">Vous n'avez pas encore loué de livres.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section> <!--/#profile_content-->

        @include('footer')
    </body>
</html>
