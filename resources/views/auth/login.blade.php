<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>
  <body class="hold-transition login-page" style="background-color: #347ebb;">
    <div class="login-box">
      <div class="login-logo text-white">
      <p><b>Login</b> Gadget-IN</p>
      </div>
      <!-- /.login-logo -->
      <div data-aos="zoom-in"
      data-aos-duration="3000">
        <div class="card">
          <div class="col-md-6 offset-md-3">
          <a href="index.html"><img src="favicon.png" class="img-fluid" alt="..."></a>
        </div>
        <div class="card-body login-card-body mt-0">
          <p class="login-box-msg text-body">Login ke akun anda</p>

          <form
            name="formLogin"
            onsubmit="return login()"
            method="POST"
            action="{{  route('login')}}"
          >
          @csrf
            <div class="input-group">
              <input
                type="email"
                name="email"
                class="form-control"
                id="email"
                placeholder="Email"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <p class="mb-3 text-danger" id="error1"></p>
            <div class="input-group">
              <input
                type="password"
                name="password"
                class="form-control"
                id="password"
                placeholder="Password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <p class="mb-3 text-danger" id="error2"></p>
            <div class="d-flex justify-content-between">
              <div class="col-">
                <div class="checkbox-content icheck-primary">
                  <input type="checkbox" id="remember" />
                  <label for="remember">Ingatkan saya</label>
                </div>
              </div>
              <div class="col- text-end mt-1">
                <a href="#">Lupa password?</a>
              </div>
            </div>

            <div class="col align-self-center mt-3">
              <button type="submit" class="btn btn-primary btn-block">
                Login
              </button>
            </div>
            <p class="mb-0 mt-2">
              <a href="/register" class="text-center">Registrasi user</a>
            </p>
          </form>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    </div>
    <!-- /.login-box -->
    <script>
      AOS.init();
    </script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="dist/js/script.js"></script>
  </body>
</html>
