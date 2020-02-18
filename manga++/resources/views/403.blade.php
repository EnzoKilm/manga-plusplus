<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        <section id="erreur_404">
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                    <li><a href="index.php">Manga++</a></li>
                    <li class="active">403</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <!-- 404 Error Text -->
                        <div class="text-center">
                            <div class="error mx-auto" data-text="403">403</div>
                            <p class="lead text-gray-800 mb-5">Accès non autorisé</p>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
            </div>
        </section>

        @include('footer')
    </body>
</html>
