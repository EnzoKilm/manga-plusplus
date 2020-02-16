<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Manga++</a></li>
                    <li class="active">Mot de passe oublié</li>
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
                                    <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-2">Mot de passe oublié?</h1>
                                                <p class="mb-4">Pas de soucis, ça arrive. Entre juste ton email en dessous et nous t'enverrons un lien pour réinitialiser ton mot de passe!</p>
                                            </div>
                                            <form class="user" method="POST" action="{{ route('password.update') }}">
                                                @csrf

                                                <input type="hidden" name="token" value="{{ $token }}">

                                                <div class="form-group">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe" name="password" required autocomplete="new-password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Répéter le mot de passe" name="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    {{ __('Réinitialiser le mot de passe') }}
                                                </button>
                                            </form>
                                            <hr>
                                            <div class="text-center">
                                                <a class="small" href="{{ route('register') }}">Créer un compte!</a>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="{{ route('login') }}">Déjà un compte? Connecte toi!</a>
                                            </div>
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
