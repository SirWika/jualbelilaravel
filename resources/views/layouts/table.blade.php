<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="robots" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Boltz : Crypto Admin Template" />
  <meta property="og:title" content="Boltz : Crypto Admin Template" />
  <meta property="og:description" content="Boltz : Crypto Admin Template" />
  <meta property="og:image" content="https://boltz.dexignzone.com/xhtml/social-image.png" />
  <meta name="format-detection" content="telephone=no" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- PAGE TITLE HERE -->
  <title>JUALBELI - @yield('title')</title>

  <!-- FAVICONS ICON -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
  <!-- Datatable -->
  <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
  <!-- Custom Stylesheet -->
  <link href="{{ asset('vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
  <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <span>A</span>
            <span>D</span>
            <span>M</span>
            <span>I</span>
            <span>N</span>
        </div>
    </div>
  <!--*******************
        Preloader end
    ********************-->

  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
        @include('layouts.partials.header')
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->

    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.partials.sidebar')
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
        @yield('container')
    <!--**********************************
            Content body end
        ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
        @include('layouts.partials.footer')
    <!--**********************************
            Footer end
        ***********************************-->


  </div>

  <!-- Required vendors -->
  <script src="{{ asset('vendor/global/global.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
  <!-- Apex Chart -->
  <script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>

  <!-- Datatable -->
  <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>

  <script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

  <script src="{{ asset('js/custom.min.js') }}"></script>
  <script src="{{ asset('js/deznav-init.js') }}"></script>


</body>

</html>
