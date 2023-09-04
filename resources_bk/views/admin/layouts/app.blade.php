@include('admin.layouts.sections.header')
@include('admin.layouts.sections.footer')
<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.layouts.sections.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

   @yield('header')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @yield('footer')

  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.layouts.sections.footerjs')
@stack('scripts')

</body>
</html>
