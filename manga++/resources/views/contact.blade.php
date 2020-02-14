<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        <div id="contact-page" class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Manga++</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
            <div class="bg">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="contact-form">
                            <h2 class="title text-center">Nous contacter</h2>
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Nom">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="subject" class="form-control" required="required" placeholder="Sujet">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Écrivez votre message ici"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Envoyer">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-info">
                            <h2 class="title text-center">Informations</h2>
                            <address>
                                <p>Manga++</p>
                                <p>1 Avenue des Champs-Élysées</p>
                                <p>Paris FRANCE</p>
                                <p>Fixe: 02 03 04 05 06</p>
                                <p>Email: contact@mangasplusplus.fr</p>
                            </address>
                            <div class="social-networks">
                                <h2 class="title text-center">Réseaux sociaux</h2>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#contact-page-->

        @include('footer')
    </body>
</html>
