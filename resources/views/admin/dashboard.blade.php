@include('admin.partials.head')


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('admin.partials.header')

@include('admin.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
                <div class="content-body" ">
                    <div class="container-fluid">


                        <div class="row" id="dragdrop">
                            <div class="col-12">
                        <div class="main-page">
                        @yield('content')
                        </div>
                        </div>

                        </div>
                    </div>
                </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    @include('admin.partials.footer')

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
