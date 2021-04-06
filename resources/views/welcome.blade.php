@extends('layouts.out')
@section('content')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown" style="text-align: center">Karibu <span><b>Kisota Community Sports Center</b></Center></span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Ifanye Ndoto Iwe Kweli</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


  <section id="about" class="about">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-title">
        <h2>Kuhusu Kisota</h2>
        <p>Kuhusu KSC</p>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Kisota community sports centre (KSC) ni kituo cha watoto kwaajili ya :
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> kucheza</li>
            <li><i class="ri-check-double-line"></i> kujifunza</li>
            <li><i class="ri-check-double-line"></i> kuinteract/ujirani</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Kwasababu ya miji kukua na changamoto kama usalama watoto wanafungiwa kwenye mageti na wanaenda na kurudi kutoka shule kwa magari hawapati nafasi ya kuchaza na kujichanganya na wenzao mtaani. Hii inapelekea hata kuwa na afya mbovu n.k
          </p>
          <a href="{{ url('players') }}" class="btn-learn-more">Jifunze Zaid</a>
        </div>
      </div>

    </div>
  </section>



  <section id="counts" class="counts">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0" class="purecounter">232</span>
            <p><strong>Happy Clients</strong> consequuntur quae qui deca rode</p>
            <a href="#">Find out more »</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0" class="purecounter">521</span>
            <p><strong>Projects</strong> adipisci atque cum quia aut numquam delectus</p>
            <a href="#">Find out more »</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="0" class="purecounter">1463</span>
            <p><strong>Hours Of Support</strong> aut commodi quaerat. Aliquam ratione</p>
            <a href="#">Find out more »</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span>
            <p><strong>Hard Workers</strong> rerum asperiores dolor molestiae doloribu</p>
            <a href="#">Find out more »</a>
          </div>
        </div>

      </div>

    </div>
  </section>



  <section id="team" class="testimonials section-bg">
        <div class="container">

          <div class="row">
            <div class="section-title aos-init aos-animate" data-aos="fade-right">
                <h2>Taarifa</h2>
                <p>Taarifa</p>
              </div>
            <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">


                  <iframe width="380" height="430"
                  src="https://www.youtube.com/embed/l9BRv4NbqqA">
                  </iframe>



            </div>
<div class="col-lg-2">
</div>
            <div class="col-lg-6">

           @foreach ($info  as $info)

                <div class="row">
                <div class="col-sm-4">
                    <p>{{ $info->taarifa }}</p>

                </div>
                <div class="col-sm-8">
                        <img src="{{ asset('storage/infos/'.$info->faili) }}" class="testimonial-img" alt="">
                </div>
                </div>

           @endforeach

          </div>
          </div>

        </div>
      </section>

  <section id="team" class="testimonials section-bg">
    <div class="container">

      <div class="row">
        <div class="section-title aos-init aos-animate" data-aos="fade-right">
            <h2>Timu</h2>
            <p>Timu</p>
          </div>
        <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">


              <iframe width="380" height="430"
              src="https://www.youtube.com/embed/l9BRv4NbqqA">
              </iframe>



        </div>
        <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" style="padding-bottom: 50px;">

          <div class="testimonials-slider swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper" style="transform: translate3d(-1890px, 0px, 0px); transition-duration: 0ms;" id="swiper-wrapper-518a139b194721050" aria-live="off"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 358px; margin-right: 20px;" role="group" aria-label="1 / 9">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" style="width: 358px; margin-right: 20px;" role="group" aria-label="2 / 9">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Keno</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>

              <div class="swiper-slide" data-swiper-slide-index="0" style="width: 358px; margin-right: 20px;" role="group" aria-label="3 / 9">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>John Madosh</h3>
                  <h4>Manager</h4>
                </div>
              </div><!-- End testimonial item -->




              @foreach ($player as $a )
              <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" style="width: 358px; margin-right: 20px;" role="group" aria-label="6 / 9">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{ asset('storage/players/'.$a->image) }}" class="testimonial-img" alt="">
                  <h3>{{ $a->player_fname }}</h3>
                  <h4>{{ $a->position }}</h4>
                </div>
              </div><!-- End testimonial item -->
              @endforeach




            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
      </div>

    </div>
  </section>




  <section id="contact" class="contact section-bg">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-title">
        <h2>Wasiliana Nasi</h2>
        <p>Wasiliana Nasi</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Anuani Yetu</h3>
                <p>Maweni, Mjimwema, KIGAMBONI-DSM</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <form action="{{ URL::to('customer/contact') }}" method="post" role="form" >
              @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="customer_name" class="form-control" id="name" placeholder="Your Name" required="">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="customer_email" id="email" placeholder="Your Email" required="">
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="customer_subject" id="subject" placeholder="Subject" required="">
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="customer_message" rows="5" placeholder="Message" required=""></textarea>
            </div>
            <div class="my-3">

            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Tuma Ujumbe">

          </form>
        <div class="row">
<div class="col-sm-5">

</div>

<div class="col-sm-5">

    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-youtube"></a>
    <a href="#" class="fa fa-instagram"></a>
</div>
        </div>
        </div>

      </div>

    </div>
  </section>

  <section id="services" class="services">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-title">
        <h2>Kupitia Google Ramani</h2>
        <p>Tunapatikana</p>
      </div>

      <div class="row">

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.683471503656!2d39.346463526385406!3d-6.846539771435801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f6002cc06bef760!2sKenonke%20Consulting!5e0!3m2!1ssw!2stz!4v1616922195096!5m2!1ssw!2stz" width="100%;" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>       </div>



      </div>

    </div>
  </section>

@endsection
