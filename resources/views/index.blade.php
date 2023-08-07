
<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="hold-transition layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    {{-- @include('layouts.preloader') --}}

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Sidebar Container -->
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      {{-- @include('layouts.content-header') --}}
      <!-- /.content-header -->

      <!-- Main content -->
      @include('layouts.main-content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.content-footer')

    <!-- Control Sidebar -->
    {{-- @include('layouts.control-sidebar') --}}
    <!-- /.control-sidebar -->
  </div>
<!-- ./wrapper -->
@include('layouts.script')
<!-- jQuery -->
</body>
</html>
