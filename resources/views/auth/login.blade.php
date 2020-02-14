<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/assets/img/logo.png">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/font/pro/css/all.min.css">

    <title>Login - Restoran</title>
  </head>
  <body>

    <!-- Container -->
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="#" method="" autocomplete="off" required>
          <h1>Register</h1>
          <div class="social-container">
            <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>Daftar Disini</span>
          <div class="form-group">
            <div class="input-group input-group-sm" style="border-top-left-radius: 50%; border-bottom-left-radius: 50%; border-top-right-radius: 50%;">
              <div class="input-group-prepend" style="margin-top: 15px;`">
                <span class="input-group-text" id="basic-addon1"><i class="fad fa-user-circle"></i></span>
              </div>  
              <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" autofocus="">
            </div>
            <div class="input-group input-group-sm" style="border-top-left-radius: 50%; border-bottom-left-radius: 50%; border-top-right-radius: 50%;">
              <div class="input-group-prepend" style="margin-top: 15px;">
                <span class="input-group-text" id="basic-addon1"><i class="fad fa-lock-alt"></i></span>
              </div>
              <input class="form-control form-control-sm" type="password" name="password" id="password" placeholder="Password" data-toggle="password">
            </div>
            <label>
              <input type="checkbox" id="methods">
              <i class="fad fa-eye"></i>
              <i class="my-icon far fa-low-vision"></i>
            </label>
            <select id="inputState" class="form-control form-control-sm">
            <option selected>Pilih Level</option>
              <option>Admin</option>
              <option>Owner</option>
              <option>Waiter</option>
              <option>Cashier</option>
            </select>
          </div>
          <button class="my-btn">Daftar</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="#" method="" autocomplete="off" required>
          <h1>Login</h1>
          <div class="social-container">
            <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>Masuk Disini</span>
          <div class="form-group">
            <div class="input-group input-group-sm" style="border-top-left-radius: 50%; border-bottom-left-radius: 50%; border-top-right-radius: 50%;">
              <div class="input-group-prepend" style="margin-top: 15px;">
                <span class="input-group-text" id="basic-addon1"><i class="fad fa-user-circle"></i></span>
              </div>  
              <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" autofocus="">
            </div>
            <div class="input-group input-group-sm" style="border-top-left-radius: 50%; border-bottom-left-radius: 50%; border-top-right-radius: 50%;">
              <div class="input-group-prepend" style="margin-top: 15px;">
                <span class="input-group-text" id="basic-addon1"><i class="fad fa-lock-alt"></i></span>
              </div>
              <input class="form-control form-control-sm" type="password" name="password" id="password" placeholder="Password" data-toggle="password">
            </div>
            <label>
              <input type="checkbox" id="methods">
              <i class="fad fa-eye"></i>
              <i class="my-icon far fa-low-vision"></i>
            </label>
          </div>
          <div class="form-group remember row">
            <div class="col-lg">
              <input class="checkbox" type="checkbox" name="remember" id="remember"><span>Ingat saya</span>
            </div>
            <div class="col-lg">
              <span><a href="" style="text-decoration: none; color: deepskyblue;">Lupa Password?</a></span>
            </div>
          </div>
          <a href="../admin/index.html"><button class="my-btn">Masuk</button></a>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Aplikasi Kasir Restoran</h1>
            <p>sudah punya akun?</p>
            <button class="ghost" id="signIn">Masuk</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Aplikasi Kasir Restoran</h1>
            <p>belum punya akun?</p>
            <button class="ghost" id="signUp">Daftar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Container -->

    <!-- Footer -->
    <footer>
      <p>Copyright &copy; 2020 All Rights Reserved by Rezky.</p>
    </footer>
    <!-- End Footer -->
    
  <!-- Script -->
  <script src="/assets/js/script.js"></script>
  <script src="/aasets/font/pro/js/all.js"></script>
  <script src="/assets/js/bootstrap-show-password.js"></script>
  <!-- End Script -->

  </body>
</html>