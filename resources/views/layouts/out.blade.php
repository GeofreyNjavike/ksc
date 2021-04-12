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
              <li><a class="nav-link scrollto" href="#about">Kuhusu</a></li>
<li><a class="nav-link scrollto" href="#news">Taarifa</a></li>
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li><a class="nav-link scrollto" href="#contact">Mawasiliano</a></li>
              <li><a class="nav-link scrollto" href="#services">Huduma</a></li>
              <li><a class="nav-link scrollto " href="{{ url('squard') }}">Wachezaji</a></li>
              <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                <ul>


                  @if (Route::has('login'))
                  <div >
                      @auth
                         <li><a href="{{ url('/home') }}">Home</a></li>
                      @else
                          <li><a href="{{ route('login') }}">Login</a></li>
                          @if (Route::has('register'))
                              <li><a href="{{ route('register') }}">Register</a></li>
                          @endif
                      @endauth
                  </div>
              @endif

                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Jiunge Nasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="{{ url('home')}}">Msajili Mwanao</a></li>
                      <li><a href="#services">Tutembelee</a></li>
                      <li><a href="#contact">Tupigie</a></li>

                    </ul>
                  </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>

        </div>
      </header>
    @yield('content')




     <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>KSC</h3>
              <p class="pb-3"><em>Sehemu sahihi ya kumwendeleza mwanao kimichezo na kiafya.</em></p>
              <p>
                Maweni, Mjimwema <br>
                KIGAMBONI,DSM<br><br>
                <strong>Phone:</strong>   <p><a href="tel:+255765133861">+255 765 133 861</a></p><br>
                <strong>Email:</strong><a href="mailto:graduatetz@gmail.com">graduatetz@gmail.com</a><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="https://www.youtube.com/channel/UCKzR_v8dQlyrZ_zRMcFsQBA" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/ksc_kisota/" class="fa fa-instagram"></a>
     <a href="https://wa.me/+255712828561?text= Hello habari nahitaji kumsajili mwanangu" class="fa fa-whatsapp" style="color: #075e54;"></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('home')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#Services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Timu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('squard')}}">wachezaji</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="ri-check-double-line"></i> kucheza</li>
            <li><i class="ri-check-double-line"></i> kujifunza</li>
            <li><i class="ri-check-double-line"></i> kuinteract/ujirani</li>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

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
