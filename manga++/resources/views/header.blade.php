<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Accueil | Manga++</title>
    <link href="public_site/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="public_site/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="public_site/css/prettyPhoto.css" rel="stylesheet">
    <link href="public_site/css/price-range.css" rel="stylesheet">
    <link href="public_site/css/animate.css" rel="stylesheet">
	<link href="public_site/css/main.css" rel="stylesheet">
	<link href="public_site/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="public_site/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public_site/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public_site/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public_site/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="public_site/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix header-left">
						<div class="logo pull-left">
							<a href="index.php"><img src="public_site/images/home/logo.png" alt="" /></a>
						</div>
						<div class="search_box pull-right">
							<input type="text" placeholder="Rechercher"/>
						</div>
					</div>
					<div class="col-md-8 clearfix header-right">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
                                @if (Route::has('login'))
                                    @auth
                                        <li><a href="{{ url('/profil') }}"><i class="fa fa-user"></i> Profil</a></li>
                                        <li><a href="{{ url('/panier') }}"><i class="fa fa-shopping-cart"></i> Panier</a></li>
                                        <li><a href="{{ url('/contact') }}"><i class="fa fa-phone"></i> Contact</a></li>
                                        <li><a href="{{ url('/deconnexion') }}"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
                                    @else
                                        <li><a href="{{ url('/panier') }}"><i class="fa fa-shopping-cart"></i> Panier</a></li>
                                        <li><a href="{{ url('/contact') }}"><i class="fa fa-phone"></i> Contact</a></li>
                                        <li><a href="{{ url('/connexion') }}"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>

                                        @if (Route::has('register'))
                                            <li><a href="{{ url('/inscription') }}"><i class="fa fa-user-plus"></i> Inscription</a></li>
                                        @endif
                                    @endauth
                                @endif
								{{-- <!-- Si connecté -->
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Panier</a></li>
								<li><a href="contact.php"><i class="fa fa-phone"></i> Contact</a></li>
								<!-- Si déconnecté -->
								<li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
								<!-- Si connecté -->
                                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li> --}}

                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
