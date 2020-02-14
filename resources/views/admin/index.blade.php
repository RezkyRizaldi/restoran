<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Admin - Restoran</title>
    <link rel="icon" href="/assets/img/logo.png">

    <!-- Fontfaces CSS-->
    <link href="/assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <!-- <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all"> -->
    <link rel="stylesheet" type="text/css" href="/assets/font/pro/css/all.min.css">
    <link href="/assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/admin/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="/assets/css/sb-admin.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="/assets/admin/css/style.css">
  </head>

  <body class="animsition">

    <!-- Awal Modal -->
    <!-- Detail -->
    <div class="modal fade" role="dialog" id="detail">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Detail Data</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="table-responsive m-b-40">
              <table class="table table-bordered text-center" style="width:100%">
                <thead class="text-light">
                  <tr>
                    <th class="bg-info o-hidden h-100">No.</th>
                    <th class="bg-primary o-hidden h-100">Total User
                      <div class="table-user-icon">
                        <i class="fad fa-fw fa-users"></i>
                      </div>
                    </th>
                    <th class="bg-warning o-hidden h-100">Total Masakan
                      <div class="table-masakan-icon">
                        <i class="fad fa-fw fa-burger-soda"></i>
                      </div>
                    </th>
                    <th class="bg-success o-hidden h-100">Total Order
                      <div class="table-order-icon">
                        <i class="fad fa-fw fa-shopping-cart"></i>
                      </div>
                    </th>
                    <th class="bg-danger o-hidden h-100">Total Transaksi
                      <div class="table-transaksi-icon">
                        <i class="fad fa-fw fa-cash-register"></i>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody class="table-secondary">
                  @php
                  $no = 1;
                  @endphp
                  <tr>
                    <td>{{ $no++ }}.</td>
                    <td>{{ $user -> count() }} User</td>
                    <td>{{ $masakan -> count() }} Masakan</td>
                    <td>{{ $order -> count() }} Order</td>
                    <td>{{ $transaksi -> count() }} Transaksi</td>
                  </tr>
                </tbody>
              </table>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal -->

    <!-- PAGE WRAPPER -->
    <div class="page-wrapper">

      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a class="logo" href="index.html">Resto Alim Rugi</a>
              <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="list-unstyled navbar__list">
              <li class="active has-sub">
                <a class="js-arrow" href="#"><i class="fad fa-tachometer-alt"></i>Dashboard</a>  
              </li>
              <li>
                <a href="chart.html"><i class="fad fa-chart-bar"></i>User</a>
              </li>
              <li>
                <a href="table.html"><i class="fad fa-table"></i>Masakan</a>
              </li>
              <li>
                <a href="form.html"><i class="far fa-check-square"></i>Order</a>
              </li>
              <li>
                <a href="calendar.html"><i class="fad fa-copy"></i>Transaksi</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="my-header">
          <a href="#">Resto Alim Rugi</a>
        </div>
        <div class="row">
          <div class="col-lg">
            <div class="my-logo">
              <img src="/assets/img/logo.png" alt="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg">
            <h4 class="text-uppercase text-center mt-4">Admin</h4>    
          </div>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li class="active has-sub">
                <a href="#" style="text-decoration: none;"><i class="fad fa-tachometer-alt"></i>Dashboard</a>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#" style="text-decoration: none;"><i class="fad fa-table"></i>Tabel<span class="arrow float-right"><i class="fad fa-angle-down"></i></span></a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="/masakan" style="text-decoration: none;"><i class="fad fa-burger-soda"></i>Masakan</a>
                  </li>
                  <li>
                    <a href="/order" style="text-decoration: none;"><i class="fad fa-shopping-cart"></i>Order</a>
                  </li>
                  <li>
                    <a href="/transaksi" style="text-decoration: none;"><i class="fad fa-cash-register"></i>Transaksi</a>
                  </li>
                  <li>
                    <a href="/user" style="text-decoration: none;"><i class="fad fa-user"></i>User</a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="row">
              <div class="col-lg text-center">
                <a class="btn btn-sm btn-secondary" href="../login/login.html" style="padding: 7px 21px;"><i class="fad fa-door-open mr-2"></i>Logout</a>
              </div>
            </div>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">

        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap">
                <div class="form-header"></div>
                <div class="header-button">
                  <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                      <div class="image" title="Setelan Akun">
                        <i class="fad fa-user-circle fa-fw"></i>
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#">Muhamad Rezky Rizaldi</a>
                      </div>
                      <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                          <div class="image" style="font-size: 50px;">
                           <i class="fad fa-user-circle fa-fw"></i>
                          </div>
                          <div class="content">
                            <h5 class="name">
                              <a href="#">Muhamad Rezky Rizaldi</a>
                            </h5>
                            <span class="email">admin@gmail.com</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- CONTENT WRAPPER -->
        <div id="content-wrapper">

          <!-- CONTAINER FLUID -->
          <div class="container-fluid">
            <div class="row" style="margin-top: 100px;">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg">
                    <h2 class="pl-1">Dashboard</h2>
                  </div>
                  <div class="col-lg-6">
                    <form class="form-header" action="" method="POST" title="Cari">
                      <input class="form-control my-input-search" type="text" name="search" placeholder="Cari Data" autofocus>
                      <button class="btn btn-primary my-button-search" type="submit"><i class="fad fa-search"></i></button>  
                    </form>
                  </div>
                  <div class="col-lg">
                    <div class="my-bg bg-info d-flex justify-content-center">
                      <ul>
                        <li title="Detail Data">
                          <a href="#detail" data-toggle="modal" data-target="#detail"><i class="fad fa-info-circle"></i></a>
                        </li>
                        <li title="Tambah Data">
                          <a href=""><i class="fad fa-plus-circle"></i></a>
                        </li>
                        <li title="Cetak Laporan">
                          <a href=""><i class="fad fa-print"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Icon Cards-->
            <div class="row mt-4">
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fad fa-fw fa-users"></i>
                    </div>
                    <div class="mr-5">{{ $user -> count() }} User</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="/user">
                    <span class="float-left">Selengkapnya</span>
                    <span class="float-right">
                      <i class="fad fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fad fa-fw fa-burger-soda"></i>
                    </div>
                    <div class="mr-5">{{ $masakan -> count() }} Masakan</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="/makanan">
                    <span class="float-left">Selengkapnya</span>
                    <span class="float-right">
                      <i class="fad fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fad fa-fw fa-shopping-cart"></i>
                    </div>
                    <div class="mr-5">{{ $order -> count() }} Order</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="/order">
                    <span class="float-left">Selengkapnya</span>
                    <span class="float-right">
                      <i class="fad fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fad fa-fw fa-cash-register"></i>
                    </div>
                    <div class="mr-5">{{ $transaksi -> count() }} Transaksi</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="/transaksi">
                    <span class="float-left">Selengkapnya</span>
                    <span class="float-right">
                      <i class="fad fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Icon Cards -->

          </div>
          <!-- END CONTAINER FLUID -->

          <!-- Sticky Footer -->
          <footer>
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; 2020 All Right Reserved by Rezky.</span>
              </div>
            </div>
          </footer>

        </div>
        <!-- END CONTENT WRAPPER -->

      </div>
      <!-- END PAGE CONTAINER -->

    </div>
    <!-- END PAGE WRAPPER -->

    <!-- Jquery JS-->
    <script src="/assets/admin/vendor/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="/assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Vendor JS       -->
    <script src="/assets/admin/vendor/slick/slick.min.js"></script>
    <script src="/assets/admin/vendor/wow/wow.min.js"></script>
    <script src="/assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="/assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assets/admin/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="/assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assets/admin/vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="/assets/admin/js/main.js"></script>

  </body>
</html>