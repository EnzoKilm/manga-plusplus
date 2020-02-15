<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
        if(isset($title)) {
            echo '<title>'.$title.' | Manga++</title>';
        } else {
            echo '<title>Manga++, la référence en matière de mangas et de bandes dessinées</title>';
        }
    ?>
    <link href="{{ URL::to('/') }}/public_site/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="{{ URL::to('/') }}/public_site/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="{{ URL::to('/') }}/public_site/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/public_site/css/price-range.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/public_site/css/animate.css" rel="stylesheet">
	<link href="{{ URL::to('/') }}/public_site/css/main.css" rel="stylesheet">
	<link href="{{ URL::to('/') }}/public_site/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ URL::to('/') }}/public_site/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::to('/') }}/public_site/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::to('/') }}/public_site/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::to('/') }}/public_site/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::to('/') }}/public_site/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix header-left">
						<div class="logo pull-left">
							<a href="{{ url('/') }}"><img src="{{ URL::to('/') }}/public_site/images/home/logo.png" alt="" /></a>
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
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt"></i> {{ __('Déconnexion') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </a>
                                    @else
                                        <li><a href="{{ url('/panier') }}"><i class="fa fa-shopping-cart"></i> Panier</a></li>
                                        <li><a href="{{ url('/contact') }}"><i class="fa fa-phone"></i> Contact</a></li>
                                        <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>

                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Inscription</a></li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
