<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Tabel Transaksi | Admin - Restoran</title>
    <link rel="icon" href="/assets/img/logo.png">

    <!-- Fontfaces CSS-->
    <link href="assets/admin/css/font-face.css" rel="stylesheet" media="all">
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
    <!-- Tambah -->
    <div class="modal fade" role="dialog" id="tambah">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger o-hidden h-100 text-light">
            <div class="tambah-modal-icon">
              <i class="fad fa-fw fa-cash-register"></i>
            </div>
            <h3 class="modal-title">Tambah Data Transaksi</h3>
            <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="data-siswa/tambah_datasiswa.php" method="post">
              <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" placeholder="Masukkan Nama Pelanggan" autofocus="" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="masakan">Nama Masakan</label>
                <input type="text" name="masakan" class="form-control" placeholder="Masukkan Nama Masakan" autofocus="" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="total">Total Bayar</label>
                <input type="text" name="total" class="form-control" placeholder="Masukkan Total Bayar" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="text" name="tanggal" class="form-control" placeholder="Masukkan Tanggal" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" required="required" name="status">
                  <option value="Bayar">Bayar</option>
                  <option value="Belum Bayar">Belum Bayar</option>
                </select>
              </div>
              <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-success" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Selesai -->
    <div class="modal fade" role="dialog" id="selesai">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header bg-danger o-hidden h-100 text-light">
            <div class="tambah-modal-icon">
              <i class="fad fa-fw fa-cash-register"></i>
            </div>
            <h3 class="modal-title">Data Transaksi</h3>
            <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="data-siswa/tambah_datasiswa.php" method="post">
              <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">Nama Pelanggan: </label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="pelanggan" value="Rezky">
                </div>
              </div>
              <div class="form-group row">
                <label for="masakan" class="col-sm-2 col-form-label">Nama Masakan: </label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="masakan" value="Seblak">
                </div>
              </div>
              <div class="form-group row">
                <label for="total" class="col-sm-2 col-form-label">Total Bayar: </label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="total" value="50000">
                </div>
              </div>
              <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal: </label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="tanggal" value="06-02-2020">
                </div>
              </div>
              <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status: </label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="status" value="Belum Bayar">
                </div>
              </div>
              <div class="modal-footer">
                <input onclick="return confirm('Anda yakin untuk memesan ini?');" type="submit" name="submit" class="btn btn-success" value="Mulai Transaksi">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal -->

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
                <a class="js-arrow" href="#"><i class="fad fa-chart-line"></i>Dashboard</a>  
              </li>
              <li>
                <a href="chart.html"><i class="fad fa-chart-bar"></i>User</a>
              </li>
              <li>
                <a href="table.html"><i class="fad fa-table"></i>Masakan</a>
              </li>
              <li>
                <a href="form.html"><i class="fad fa-check-square"></i>Order</a>
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
              <li class="has-sub">
                <a class="js-arrow" href="/" style="text-decoration: none;"><i class="fad fa-chart-line"></i>Dashboard</a>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#" style="text-decoration: none;"><i class="fad fa-table"></i>Tabel<span class="arrow float-right"><i class="fad fa-angle-down"></i></span></a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="/masakan" style="text-decoration: none;"><i class="fad fa-burger-soda text-warning"></i>Masakan</a>
                  </li>
                  <li>
                    <a href="/order" style="text-decoration: none;"><i class="fad fa-shopping-cart text-success"></i>Order</a>
                  </li>
                  <li class="active">
                    <a href="#" style="text-decoration: none;"><i class="fad fa-cash-register text-danger"></i>Transaksi</a>
                  </li>
                  <li>
                    <a href="/user" style="text-decoration: none;"><i class="fad fa-user text-primary"></i>User</a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="row">
              <div class="col-lg text-center">
                <a class="btn btn-sm btn-secondary" href="#" style="padding: 7px 21px;"><i class="fad fa-door-open mr-2"></i>Logout</a>
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
                                        <div class="image" style="border-radius: 50px; font-size: 30px;" title="Setelan Akun">
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

    <div id="content-wrapper">

        <div class="container-fluid">
          <div class="row" style="margin-top: 100px;">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg">
                  <h4 class="pl-1">Tabel Data Transaksi</h4>
                </div>
                <div class="col-lg">
                  <form class="form-header" action="" method="POST" title="Cari">
                    <input class="form-control" type="text" name="search" placeholder="Cari" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;" autofocus>
                    <button class="btn btn-primary" type="submit" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;"><i class="fad fa-search"></i></button>  
                  </form>
                </div>
                <div class="col-lg-4">
                  <form class="form-header" action="" method="POST" title="Cari">
                    <input class="form-control" type="text" name="search" placeholder="Cari" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;" autofocus>
                    <button class="btn btn-primary" type="submit" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;"><i class="fad fa-search"></i></button>  
                  </form>
                </div>
                <div class="col-lg">
                  <div class="d-flex justify-content-center">
                    <a class="btn btn-sm btn-success" href="#tambah" data-toggle="modal" data-target="#tambah" style="padding: 7px 21px; font-size: 10px;"><i class="fad fa-plus-circle mr-2"></i>Tambah Data</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row m-t-30">
            <div class="col-md-12">

              <!-- DATA TABLE-->
              <div class="table-responsive m-b-40">
                <table id="dataTable" class="table table-striped table-bordered text-center" style="width:100%">
                  <thead class="table-primary">
                    <tr>
                      <th>No.</th>
                      <th>Nama Pelanggan</th>
                      <th>Makanan</th>
                      <th>Tanggal</th>
                      <th>Total Bayar</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($transaksi as $t)
                    <tr>
                      <td>{{ $no++ }}.</td>
                      <td>{{ $t -> id_user }}</td>
                      <td>{{ $t -> id_order }}</td>
                      <td>{{ $t -> tanggal }}</td>
                      <td>{{ $t -> total_bayar }}</td>
                      <td>belum bayar</td>
                      <td>
                        <a href="#selesai" data-toggle="modal" data-target="#selesai" class="btn btn-primary" title="Checkout"><i class="fad fa-money-check-alt"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- END DATA TABLE-->

            </div>
          </div>
          <!-- END DATA TABLE -->

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer>
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; 2020 All Right Reserved by Rezky.</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->
              <!-- END PAGE CONTAINER-->
          </div>

      </div>

      <!-- Jquery JS-->
      <script src="/assets/admin/vendor/jquery-3.2.1.min.js"></script>

      <!-- DataTables -->
      <script src="/assets/vendor/datatables/jquery.dataTables.js"></script>
      <script src="/assets/vendor/datatables/dataTables.bootstrap4.js"></script>
      <script src="/assets/js/datatables-demo.js"></script>

      <!-- Bootstrap JS-->
      <script src="/assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
      <script src="/assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>

      <!-- Vendor JS -->
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