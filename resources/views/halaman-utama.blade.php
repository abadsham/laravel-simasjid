<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="hold-transition sidebar-mini layout-fixed">
{{-- @include('layouts.preloader') --}}
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark bg-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index" class="nav-link">Beranda</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Tentang Kami</a>
            <!---visi misi,tentang,penjelasan,dll   --->
        </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <div class="d-flex mx-3">
            <a href="login" class="my-auto mr-2 text-decoration-none text-white">Login</a>
        </div>
        </ul>
    </nav>
    <!-- /.navbar -->

    <aside class="main-sidebar sidebar-light-dark shadow-lg bg-gradient-lightblue" >
        <div class="brand-link text-center">
        <img src="dist/img/logo-masjid.png" class="img-circle" width="100" height="100">
        <span class="brand-text text-bold"> MasjidQu. </span>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                
                <li class="nav-item">
                    <a href="/index.html" class="nav-link active">
                    <i class="fas fa-tachometer-alt nav-icon"></i>
                    <p>Beranda</p>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <a href="pages/kanban.html" class="nav-link">
                    <i class="nav-icon fas fa-solid"></i>
                    <p>Keluar</p>
                    </a>
                </li>
                </ul>
            </nav>
        </div>
        <!-- /.sidebar -->

        <div class="content-wrapper">
            <section class="content" style="background-color: #fff;">
                <div class="container-fluid pt-3">
                    {{-- ISI KONTEN --}}
                    @yield('content')
                </div>
            </section>
        </div>
    </aside>
  </div>
@include('layouts.script')
</body>
</html>