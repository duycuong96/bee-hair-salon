<!DOCTYPE html>
<html>

<head>
    @include('admin::layouts.includes.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
            @include('admin::layouts.includes.main_header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
            @include('admin::layouts.includes.main_sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- main footer -->
            @include('admin::layouts.includes.main_footer')
        <!-- /.main footer -->
    </div>
    <!-- ./wrapper -->

        @include('admin::layouts.includes.footer')

        @stack('scripts')
</body>

</html>
