<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">




  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <link href="{{ asset ('Backend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset ('Backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('Backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('Backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset ('Backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('Backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset ('Backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset ('Backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset ('Backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset ('Backend/assets/css/style.css')}}" rel="stylesheet">




</head>

<body>

  <!-- ======= Header ======= -->
  @include('Backend.layouts.partial.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('Backend.layouts.partial.sidebar')
  <!-- End Sidebar-->

 @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CodeArtist.IT</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  

  <!-- Vendor JS Files -->
  <script src="{{ asset ('Backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset ('Backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('Backend/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset ('Backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset ('Backend/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset ('Backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset ('Backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset ('Backend/assets/vendor/php-email-form/validate.js')}}"></script>
 

  <!-- Template Main JS File -->
  <script src="{{ asset ('Backend/assets/js/main.js')}}"></script>


</body>

</html>