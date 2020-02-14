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

            </div>
        </section> <!--/#profile_content-->

        @include('footer')
    </body>
</html>
