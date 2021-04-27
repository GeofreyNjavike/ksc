@extends('layouts.out')
@section('content')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
       @foreach($hero as $value)
       <div class="carousel-item active" style="background-image: url(asset('storage/app/public/heros/'.$value->hero_image))">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown" style="text-align: center;">Karibu <span><b>{{$value->hero_head}}</b></span></h2>
              <p class="animate__animated animate__fadeInUp">{{$value->hero_content}}</p>
              <a href="{{url('home')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Karibu>>></a>
            </div>
          </div>
        </div>
       @endforeach


      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


 @foreach($about as $value)

 <section id="about" class="about">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-title">
        <h2>Kuhusu Kisota</h2>
        <p>Kuhusu KSC</p>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            {{$value->about_head}}:
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
                                            <div class="collapse" id="collapseExample123"><p>{{$value->about_content}}</p></div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" data-toggle="collapse" href="#collapseExample123" class="btn btn-primary">Jifunze Zaidi</button>
                                        </div>
                                    </div>



        </div>
      </div>

    </div>
  </section>


@endforeach
      <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Chukua Hatua</h3>
          <p> Tupo kukusikiliza na kukusaidia katika kuijenga afya ya mwanao na kuimarisha taifa lijalo, Karibu Kisota Community sports center, Sehemu sahihi kwaajili ya mafunzo ya michezo kwa mwanao.</p>
          <a class="cta-btn" href="{{url('home')}}">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->


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
                                        <hr>
                                        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 rounded" style="height: 400px; width: 100%" src="{{ asset('storage/app/public/events/1.jpg') }}" alt="First slide">
                                                </div>
                                               @foreach($events as $ev)

                                                <div class="carousel-item">



<div class="container1">
 <img class="d-block w-100" style="height: 400px; width: 100%" src="{{ asset('storage/events/'.$ev->image) }}"  alt="Second slide" class="rounded">
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
    font-weight: 900;
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
    font-weight: 900;
  position: absolute;
  bottom: 8px;
  right: 16px;
}

/* Centered text */
.centered1 {
  font-weight: 900;
  font-size: 30px;
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
              src="https://www.youtube.com/embed/foiOZCm5Ooc" class="rounded">
              </iframe>


                                        </div>
                                    </div>


            </div>

            <div class="col-lg-8">

<h5 class="card-title">Habari</h5>
<hr>


@foreach ($info  as $info)

                <div class="row">

                <div class="col-sm-5">

                  <img  src="{{ asset('storage/app/public/infos/'.$info->faili) }}"  alt="" class="rounded" style="height: 100%; width: 100%;"  >



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
                   
                       <p> {{$info->ujumbe}}  </p><span><a href="{{URL:: to('taarifa/'.$info->id)}}">Read more >>></a></span>

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
            <h2>Testimonials</h2>
            <p>Testimonials</p>
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
              </div>

             




              @foreach ($users as $a )
              <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" style="width: 358px; margin-right: 20px;" role="group" aria-label="6 / 9">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <div class="row">
                      <div class="col-sm-12">
                        <p>{{$a->ushuhuda}}</p>
                      </div>

                    </div>

                  </p>
                  <img src="{{ asset('storage/app/public/parents/'.$a->parent_image) }}" class="testimonial-img" alt="">
                  <h3> <b></b>{{ $a->fname}} {{$a->lname}}</h3>
   <h4>Mzazi</h4>
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



@endsection
