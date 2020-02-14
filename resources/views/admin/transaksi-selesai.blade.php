<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Admin-User</title>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
  </head>
  <body class="animsition">
    <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a class="logo" href="index.html">
              RESTAURARE
              </a>
              <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="list-unstyled navbar__list">
              <li class="active has-sub">
                <a class="js-arrow" href="index.html">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>  
              </li>
              <li>
                <a href="chart.html">
                <i class="fas fa-chart-bar"></i>User</a>
              </li>
              <li>
                <a href="makanan.html">
                <i class="fas fa-table"></i>Makanan</a>
              </li>
              <li>
                <a href="form.html">
                <i class="far fa-check-square"></i>Order</a>
              </li>
              <li>
                <a href="calendar.html">
                <i class="fas fa-copy"></i>Transaksi</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->
      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
          <a href="#">
          RESTAURARE
          </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li >
                <a class="js-arrow" href="index.html">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>  
              </li>
              <li>
                <a href="user.html">
                <i class="fas fa-chart-bar"></i>User</a>
              </li>
              <li>
                <a href="makanan.html">
                <i class="fas fa-table"></i>Makanan</a>
              </li>
              <li>
                <a href="order.html">
                <i class="far fa-check-square"></i>Order</a>
              </li>
              <li  class="active has-sub">
                <a href="transaksi.html">
                <i class="fas fa-copy"></i>Transaksi</a>
              </li>
            </ul>
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
                <form class="form-header" action="" method="POST">
                  <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                  <button class="au-btn--submit" type="submit">
                  <i class="zmdi zmdi-search"></i>
                  </button>
                </form>
                <div class="header-button">
                  <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                      <div class="image" style="border-radius: 50px;">
                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#">john doe</a>
                      </div>
                      <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                          <div class="image">
                            <a href="#">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                            </a>
                          </div>
                          <div class="content">
                            <h5 class="name">
                              <a href="#">john doe</a>
                            </h5>
                            <span class="email">johndoe@example.com</span>
                          </div>
                        </div>
                        <div class="account-dropdown__footer">
                          <a href="">
                          <i class="zmdi zmdi-power"></i>Logout</a>
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
        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <!-- DATA TABLE -->
                  <h3 class="title-5 m-b-35">TRANSAKSI</h3>
                  <div class="table-data__tool">
                    <div class="table-data__tool-left">
                      <div class="rs-select2--light rs-select2--md">
                        <form class="form-header" action="" method="POST">
                          <input class="au-input au-input--xl" type="text" name="search" placeholder="Cari Data" />
                          <button class="au-btn--submit" type="submit">
                          <i class="zmdi zmdi-search"></i>
                          </button>
                        </form>
                      </div>
                    </div>
                    <div class="table-data__tool-right">
                      <a href="tambah-order.html" class="au-btn au-btn-icon au-btn--green au-btn--small">Laporan</a>
                    </div>
                  </div>
                  <div class="row m-t-30">
                    <div class="col-md-12">
                      <!-- DATA TABLE-->
                      <div class="table-responsive m-b-40">
                        <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
                          <thead class="table-success">
                            <tr>
                              <th>No</th>
                              <th>Pelanggan</th>
                              <th>Makanan</th>
                              <th>Total Bayar</th>
                              <th>Tanggal</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>dinar</td>
                              <td>Seblak</td>
                              <td>50000</td>
                              <td>06-02-2020</td>
                              <td>Sudah bayar</td>
                              <td>
                                <a href="#" class="btn btn-primary">Selesai</a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>dinar</td>
                              <td>Seblak</td>
                              <td>50000</td>
                              <td>06-02-2020</td>
                              <td>Sudah bayar</td>
                              <td>
                                <a href="#" class="btn btn-primary">Selesai</a>
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>dinar</td>
                              <td>Seblak</td>
                              <td>50000</td>
                              <td>06-02-2020</td>
                              <td>Sudah bayar</td>
                              <td>
                                <a href="#" class="btn btn-primary">Selesai</a>
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                           	  <td>dinar</td>
                              <td>Seblak</td>
                              <td>50000</td>
                              <td>06-02-2020</td>
                              <td>Sudah bayar</td>
                              <td>
                                <a href="#" class="btn btn-primary">Selesai</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- END DATA TABLE-->
                    </div>
                  </div>
                  <!-- END DATA TABLE -->
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-md-12">
                  <div class="copyright">
                    <p>Copyright © 2020 Dinar.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
      </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
  </body>
</html>
<!-- end document-->