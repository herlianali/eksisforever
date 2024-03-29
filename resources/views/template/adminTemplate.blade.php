<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eksisforever | @yield("title")</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset("public/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css")}}">
    <link rel="stylesheet" href="{{asset("public/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/assets/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{asset("public/assets/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{asset("public/lending_page/fontawesome/css/all.css")}}">
    @stack('cssTambahan')
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset("public/assets/css/shared/style.css")}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset("public/assets/css/demo_1/style.css")}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset("public/Logokartar.png")}}" />
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
            {{-- <img src="{{asset("lending_page/assets/img/eksisforever.png")}}" alt="logo" />  --}}
            Eksisforever
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="{{asset("public/lending_page/assets/img/Logo-Karang-Taruna-300x293.png")}}" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{asset("public/assets/images/faces/face8.jpg")}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset("public/assets/images/faces/face8.jpg")}}" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="{{ route('admin/logout') }}">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("admin")}}">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("admin/agenda")}}">
                <span class="menu-title">Agenda</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("admin/pengumuman")}}">
                <span class="menu-title">Pengumuman</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("admin/statis")}}">
                <span class="menu-title">Data static</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#berita" aria-expanded="false" aria-controls="berita">
                <span class="menu-title">Berita</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="berita">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url("admin/beritaKT")}}"> Berita KT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url("admin/beritaRW")}}"> Berita RW</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("admin/user")}}">
                <span class="menu-title">Users</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("admin/galeri")}}">
                <span class="menu-title">Galeri</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("admin/kegiatan")}}">
                <span class="menu-title">Kegiatan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("admin/forum")}}">
                <span class="menu-title">Forum</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("admin/produk")}}">
                <span class="menu-title">Produk</span>
              </a>
            </li>

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper"> 
            @yield('content')
          </div>
          <!-- content-wrapper ends -->

          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © cyberLAB.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="https://umsida.ac.id/cyberLAB" target="_blank">Klik to order web</a> from cyberLAB.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script src="{{ asset('public/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset("public/assets/vendors/js/vendor.bundle.addons.js") }}"></script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    {{-- <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script> --}}
    <script src="{{asset("public/assets/vendors/js/vendor.bundle.base.js")}}"></script>
    <!-- inject:js -->
    <script src="{{asset("public/assets/js/shared/off-canvas.js")}}"></script>
    <!-- endinject -->
    @stack('jsTambahan')
  </body>
</html>