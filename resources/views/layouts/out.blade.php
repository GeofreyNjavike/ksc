<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kisota Community sports Center</Center></title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}"  rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">

</head>
<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

          <h1 class="logo"><a href="/">KSC</a></h1>



          <nav id="navbar" class="navbar">
            <ul>


              <li><a class="nav-link scrollto active" href="#hero">Nyumbani</a></li>
<li><a class="nav-link scrollto" href="#news">Taarifa</a></li>
              <li><a class="nav-link scrollto" href="#contact">Mawasiliano</a></li>
              <li><a class="nav-link scrollto " href="{{ url('squard') }}">Wachezaji</a></li>
   


                  @if (Route::has('login'))
               
                      @auth
                         <li><a class="nav-link scrollto" href="{{ url('/home') }}">Home</a></li>
                      @else
                          <li><a  class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                          @if (Route::has('register'))
                              <li><a  class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
                          @endif
                      @endauth
                  
              @endif

                       

          
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>

        </div>
      </header>
    @yield('content')




     <!-- ======= Footer ======= -->
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KSC</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://njaviketech.com/">Njavike Tech</a>
      </div>
    </div>
  </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color: #0077be;"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/js/main.js') }}"></script>
</body>
</html>
