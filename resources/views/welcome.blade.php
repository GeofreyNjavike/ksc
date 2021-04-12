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
              <p class="animate__animated animate__fadeInUp">Kwasababu ya miji kukua na changamoto kama usalama watoto wanafungiwa kwenye mageti na wanaenda na kurudi kutoka shule kwa magari hawapati nafasi ya kuchaza na kujichanganya na wenzao mtaani</p>
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




<div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">Karibu</h5>
                                            <p>
            Kwasababu ya miji kukua na changamoto kama usalama watoto wanafungiwa kwenye mageti na wanaenda na kurudi kutoka shule kwa magari hawapati nafasi ya kuchaza na kujichanganya na wenzao mtaani. Hii inapelekea hata kuwa na afya mbovu n.k
          </p>
                                            <div class="collapse" id="collapseExample123"><p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                                nesciunt sapiente ea
                                                proident.</p>
                                                <p>Donec molestie odio id nisi malesuada, mattis tincidunt velit egestas. Sed non pulvinar risus. Aenean elementum eleifend nunc, pellentesque dapibus arcu hendrerit fringilla. Aliquam in nibh massa. Cras ultricies
                                                    lorem non enim volutpat, a eleifend urna placerat. Fusce id luctus urna. In sed leo tellus. Mauris tristique leo a nisl feugiat, eget vehicula leo venenatis. Quisque magna metus, luctus quis sollicitudin vel,
                                                    vehicula nec ipsum. Donec rutrum commodo lacus ut condimentum. Integer vel turpis purus. Etiam vehicula, nulla non fringilla blandit, massa purus faucibus tellus, a luctus enim orci non augue. Aenean
                                                    ullamcorper nisl urna, non feugiat tortor volutpat in. Vivamus lobortis massa dolor, eget faucibus ipsum varius eget. Pellentesque imperdiet, turpis sed sagittis lobortis, leo elit laoreet arcu, vehicula
                                                    sagittis elit leo id nisi.</p></div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" data-toggle="collapse" href="#collapseExample123" class="btn btn-primary">Jifunze Zaidi</button>
                                        </div>
                                    </div>



        </div>
      </div>

    </div>
  </section>



  <section id="counts" class="counts">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="row no-gutters">
        <div class="col-lg-2 col-md-6 d-md-flex align-items-md-stretch">
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="0" class="purecounter">{{ $mails }}</span>
            <p><strong>Parent Reqquests</strong>Wazazi wanasajili watoto wao kila siku,</p>
            <a href="{{ url('home') }}">Karibu »</a>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="" data-purecounter-duration="0" class="purecounter">1600-1800</span>
            <p><strong>Muda wa Mazoezi</strong> Wakiongozwa na Makocha na wakufunzi wazuri, Muda wa mazoezi ni </p>
            <a href="{{ url('home') }}">Jiunge nasi. »</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="37" data-purecounter-duration="0" class="purecounter">{{ $players }}</span>
            <p><strong>Idadi ya Watoto Waliosajiliwa</strong> Kila siku watoto wanasajiliwa, Unasubri nini...?</p>
            <a href="{{ url('home') }}">Karibu Umsajili Mwanao... »</a>
          </div>
        </div>

      </div>

    </div>
  </section>



  <section id="news" class="testimonials section-bg">
        <div class="container">

          <div class="row">
            <div class="section-title aos-init aos-animate" data-aos="fade-right">
                <h2>Taarifa</h2>
                <p>Taarifa</p>
              </div>
            <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">




                                    <div class="card-body">
                                        <h5 class="card-title">Matangazo</h5>
                                        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" style="height: 400px; width: 100%" src="{{ asset('storage/app/public/events/1.jpg') }}" alt="First slide">
                                                </div>
                                               @foreach($events as $ev)

                                                <div class="carousel-item">



<div class="container1">
 <img class="d-block w-100" style="height: 400px; width: 100%" src="{{ asset('storage/events/'.$ev->image) }}"  alt="Second slide">
  <div class="bottom-left">{{ $ev->tarehe}}</div>
  <div class="bottom-right">{{$ev->mahali}}</div>
  <div class="centered1">{{ $ev->tukio}}</div>
</div>


  <style type="text/css">

/* Container holding the image and the text */
.container1 {
  position: relative;
  text-align: center;
  color: white;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

/* Centered text */
.centered1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

  </style>

                                                </div>

                                               @endforeach

                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>

                                     <div class="card-body">
                                        <h5 class="card-title">Video</h5>
                                        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">

                                               <iframe width="100%" height="430"
              src="https://www.youtube.com/embed/foiOZCm5Ooc">
              </iframe>


                                        </div>
                                    </div>


            </div>

            <div class="col-lg-8">

<h5 class="card-title">Habari</h5>

           @foreach ($info  as $info)

                <div class="row">

                <div class="col-sm-5">

                  <img  src="{{ asset('storage/app/public/infos/'.$info->faili) }}"  alt="" class="img-thumbnail" style="height: 100%; width: 100%;"  >



                </div>

                <div class="col-sm-7">

                  <div class="form-row">
                    <div class="col-sm-12">
                      <p><b>{{ $info->taarifa }}</b></p>
                    </div>
                    <hr/>
                     <p style="font-size: 10px;"><i class="fa fa-calendar" style="font-size: 15px"></i>
<span>{{ $info->created_at}}</span></p>
                     <hr/>
                    <div class="col-sm-12">
                       <p> {{$info->ujumbe}}</p>
                    </div>
                  </div>


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


              <iframe width="100%" height="430"
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
                    <div class="row">
                      <div class="col-sm-5">
                        <p>Jina: <b>{{ $a->player_fname}}</b></p>
                      </div>
                      <div class="col-sm-1">

                      </div>
                      <div class="col-sm-5">
                        <p>Jezi:<b> {{ $a->jezi}} </b></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-5">
                        <p>Chenga:<b>{{ $a->chenga}} /10</b></p>
                      </div>
                      <div class="col-sm-1">

                      </div>
                      <div class="col-sm-5">
                        <p>Nguvu: <b>{{ $a->nguvu}}/10</b></p>
                      </div>
                    </div>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{ asset('storage/app/public/players/'.$a->image) }}" class="testimonial-img" alt="">
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
                    <p><a href="mailto:graduatetz@gmail.com">graduatetz@gmail.com</a></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
             <p><a href="tel:+255765133861">+255 765 133 861</a></p>
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
    <a href="https://www.youtube.com/channel/UCKzR_v8dQlyrZ_zRMcFsQBA" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/ksc_kisota/" class="fa fa-instagram"></a>
     <a href="https://wa.me/+255712828561?text= Hello habari nahitaji kumsajili mwanangu" class="fa fa-whatsapp" style="color: #075e54;"></a>
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
