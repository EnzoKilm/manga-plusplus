<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Manga++</a></li>
                    <li class="active">Panier</li>
                    </ol>
                </div>
                <h1>Erreur de la location</h1>
                <p>Votre panier est vide, impossible de valider la location.<br/>
            </div>
        </section>

        @include('footer')
    </body>
</html>
