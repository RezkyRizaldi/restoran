<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Tabel User | Admin - Restoran</title>
    <link rel="icon" href="/assets/img/logo.png">

    <!-- Fontfaces CSS-->
    <link href="/assets/admin/css/font-face.css" rel="stylesheet" media="all">
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
          <div class="modal-header bg-primary o-hidden h-100 text-light">
            <div class="tambah-modal-icon">
              <i class="fad fa-fw fa-users"></i>
            </div>
            <h3 class="modal-title">Tambah Data User</h3>
            <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{ route('tambah_user') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" autofocus="" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="id_level">Level</label>
                <select class="form-control" require d="required" name="id_level">
                  @foreach ($level as $l)
                  <option value="{{ $l -> id_level }}">{{ $l -> nama_level }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-success" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Ubah -->
    <div class="modal fade" role="dialog" id="ubah">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary o-hidden h-100 text-light">
            <div class="tambah-modal-icon">
              <i class="fad fa-fw fa-users"></i>
            </div>
            <h3 class="modal-title">Ubah Data User</h3>
            <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="" autofocus="" autocomplete="off" readonly disabled>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" placeholder="" autocomplete="off" readonly disabled>
              </div>
              <div class="form-group">
                <label for="level">Level</label>
                <select class="form-control" required="required" name="level">
                  <option value="Pelanggan">Pelanggan</option>
                  <option value="Pelayan">Pelayan</option>
                  <option value="Kasir">Kasir</option>
                  <option value="Owner">Owner</option>
                  <option value="Admin">Admin</option>
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
                <a href="table.html"><i class="fad fa-table"></i>Makanan</a>
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
                    <a href="/makanan" style="text-decoration: none;"><i class="fad fa-burger-soda text-warning"></i>Makanan</a>
                  </li>
                  <li>
                    <a href="/order" style="text-decoration: none;"><i class="fad fa-shopping-cart text-success"></i>Order</a>
                  </li>
                  <li>
                    <a href="/transaksi" style="text-decoration: none;"><i class="fad fa-cash-register text-danger"></i>Transaksi</a>
                  </li>
                  <li class="active">
                    <a href="#" style="text-decoration: none;"><i class="fad fa-user text-primary"></i>User</a>
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
                  <h4 class="pl-1">Tabel Data User</h4>
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
                <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                  <thead class="table-success">
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Level</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($user as $u)
                    <tr>
                      <td>{{ $no++ }}.</td>
                      <td>{{ $u -> name }}</td>
                      <td>{{ $u -> email }}</td>
                      <td>{{ $u -> id_level }}</td>
                      <td>
                        <a href="#ubah" data-toggle="modal" data-target="#ubah" class="btn btn-primary" title="Ubah Data"><i class="fad fa-edit"></i></a> | 
                        <a href="#" onclick="confirm('Anda yakin ingin menghapus data ini?');" class="btn btn-danger" title="Hapus Data"><i class="fad fa-trash-alt"></i></a>
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