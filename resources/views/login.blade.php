<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="hold-transition login-page bg-gradient-lightblue">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card elevation-3">
    <div class="card-header text-center">
      <p class="h2"><b style="color: #000">Login</b></p>
    </div>
    <div class="card-body">
      <form action="#" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="twxt" name="username" id="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="">
          <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </div>
      </form>
      
      <div class="d-flex justify-content-between align-items-center pt-1">
        <p class="text-dark text-sm">belum punya akun?
          <a href="register"> Daftar</a>
        </p>
        <p class="text-dark">
          <a href="#" class="text-sm">Lupa pasword?</a>
        </p>
      </div>
        
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@include('layouts.script')
</body>
</html>
