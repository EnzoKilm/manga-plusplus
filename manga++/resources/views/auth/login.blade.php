<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Manga++</a></li>
                    <li class="active">Connexion</li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="log_content">
            <div class="container">
                <!-- Outer Row -->
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12 col-md-9">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Re-bonjour!</h1>
                                            </div>
                                            <form class="user" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrez votre adresse mail..." required autocomplete="email" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe" name="password" required autocomplete="current-password">
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox small">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Se souvenir de moi') }}
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    {{ __('Connexion') }}
                                                </button>
                                                <hr>
                                                <div class="text-center">
                                                    @if (Route::has('password.request'))
                                                        <a class="small" href="{{ route('password.request') }}">
                                                            Mot de passe oublié?
                                                        </a>
                                                    @endif
                                                </div>
                                                <div class="text-center">
                                                    <a class="small" href="{{ route('register') }}">Créer un compte!</a>
                                                </div>
                                            </form>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--/#log_content-->

        @include('footer')
    </body>
</html>
