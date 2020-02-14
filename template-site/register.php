<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
	
    <section>
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Manga++</a></li>
				  <li class="active">Inscription</li>
				</ol>
			</div>
		</div>
    </section>
    
	<section id="log_content">
		<div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Créer un compte!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Prénom">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Répéter le mot de passe">
                                        </div>
                                    </div>
                                    <a href="login.php" class="btn btn-primary btn-user btn-block">
                                    S'inscrire
                                    </a>
                                    <hr>
                                    <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> S'inscrire avec Google
                                    </a>
                                    <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> S'inscrire avec Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.php">Mot de passe oublié?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.php">Déjà un compte? Connecte toi!</a>
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