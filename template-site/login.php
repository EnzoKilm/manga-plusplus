<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
	
    <section>
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Manga++</a></li>
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
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Re-bonjour!</h1>
                                        </div>
                                        <form class="user">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrez votre adresse mail...">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Se souvenir de moi</label>
                                                </div>
                                            </div>
                                            <a href="index.php" class="btn btn-primary btn-user btn-block">
                                                Connexion
                                            </a>
                                            <hr>
                                            <a href="index.php" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Connexion avec Google
                                            </a>
                                            <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Connexion avec Facebook
                                            </a>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.php">Mot de passe oublié?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="register.php">Créer un compte!</a>
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
    
	
	<?php include 'footer.php'; ?>
</body>
</html>