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
                <h1>Succès de la location</h1><br/>
            </div>
        </section>

        @include('footer')
    </body>
</html>
