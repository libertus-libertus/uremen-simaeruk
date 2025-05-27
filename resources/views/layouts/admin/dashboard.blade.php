<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Uremen Simaeruk &mdash; @yield('title')</title>
  <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/x-icon">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    @includeIf('layouts.admin.partials.navbar')

    <!-- Sidebar -->
    @includeIf('layouts.admin.partials.sidebar')

    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          @yield('header')
          <small>@yield('subheader')</small>
        </h1>
      </section>

      @yield('content')
    </div>
    
    <!-- Footer -->
    @includeIf('layouts.admin.partials.footer')
  </div>

  <script src="{{ asset('admin/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
  <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/fastclick/fastclick.min.js') }}"></script>
  <script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/dist/js/dashboard2.js') }}"></script>
  <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
</body>

</html>