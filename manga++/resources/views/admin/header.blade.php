<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administration - Manga++</title>
  <link rel="shortcut icon" href="{{ URL::to('/') }}/favicon.ico">

  <!-- Custom fonts for this template-->
  <link href="{{ URL::to('/') }}/admin_site/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ URL::to('/') }}/admin_site/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/admin_site/css/style.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{ URL::to('/') }}/admin_site/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Manga<sup>++</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de bord</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Stock
      </div>

      <!-- Nav Item - Mouvements -->
      <li class="nav-item {{ Request::is('admin/mouvements') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.mouvements') }}">
          <i class="fas fa-exchange-alt"></i>
          <span>Mouvements</span></a>
      </li>

      <!-- Nav Item - Locations -->
      <li class="nav-item {{ Request::is('admin/locations') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.locations') }}">
          <i class="fas fa-shopping-cart"></i>
          <span>Locations</span></a>
      </li>

        <!-- Nav Item - Books Collapse Menu -->
        <li class="nav-item {{ Request::is('admin/livres*') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBooks" aria-expanded="true" aria-controls="collapseBooks">
                <i class="fas fa-book-open"></i>
                <span>Livres</span>
            </a>
            <div id="collapseBooks" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.books') }}">
                    <i class="fas fa-tags"></i>
                    <span>Tout voir</span>
                </a>
                <a class="collapse-item" href="{{ route('admin.books.add') }}">
                    <i class="fas fa-plus"></i>
                    <span>Ajouter</span>
                </a>
                </div>
            </div>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Utilisateurs
      </div>

      <!-- Nav Item - Clients -->
      <li class="nav-item {{ Request::is('admin/clients') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.clients') }}">
          <i class="fas fa-users"></i>
          <span>Clients</span></a>
      </li>

        <!-- Nav Item - Abonnements Collapse Menu -->
        <li class="nav-item {{ Request::is('admin/abonnements*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubscriptions" aria-expanded="true" aria-controls="collapseSubscriptions">
            <i class="fas fa-certificate"></i>
            <span>Abonnements</span>
        </a>
        <div id="collapseSubscriptions" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.subscriptions') }}">
                <i class="fas fa-tags"></i>
                <span>Tout voir</span>
            </a>
            <a class="collapse-item" href="{{ route('admin.subscriptions.add') }}">
                <i class="fas fa-plus"></i>
                <span>Ajouter</span>
            </a>
            </div>
        </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Home page -->
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('/') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Accueil du site</span></a>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Nav Item - Alerts -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter">1</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">
            Alertes
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">19 février 2020</div>
              <span class="font-weight-bold">Bienvenue sur le panel d'administration!</span>
            </div>
          </a>
        </div>
      </li>

      <!-- Nav Item - Messages -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <!-- Counter - Messages -->
          <span class="badge badge-danger badge-counter"></span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">
            Messages
          </h6>
        </div>
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrateur</span>
          <img class="img-profile rounded-circle" src="{{ URL::to('/') }}/admin_site/img/superuser.png">
        </a>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->
