@extends('layouts.out2')


@section('content')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('{{ asset('assets/img/slide/slide-1.jpg') }}')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown" style="text-align: center">Karibu <span><b>Kisota Community Sports Center</b></Center></span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('{{ asset('assets/img/slide/slide-2.jpg') }}')">
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

<main>
    <div class="section-title aos-init aos-animate" data-aos="fade-right">
        <br>
        <br>
        <h2 style="text-align: center">{{ $player->player_fname }} Profile</h2>

      </div>
   <!-- Modal -->

     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">


           <!-- Modal content-->




                       <div class="row justify-content-center">
                           <div class="col-lg-12">
                               <div class="card shadow-lg border-0 rounded-lg mt-3">
                                <div class="form-row" style="background-image:  url('{{ asset('assets/img/soccer.jpg') }}'); height: 100%;
                                width: 100%; padding-left:15px;">

                                    <div class="col-md-3">

                                        <img src=" {{ asset('storage/players/'.$player->image) }}" class="rounded-circle " style="height:
                                        70px; width:70px;" >


                                         </div>

                                         <div class="col-md-7">

                                         </div>

                                         <div class="col-md-2 ">
                                            <label class="small mb-2 jezi" ><b>{{ $player->jezi }}</b></label>
                                            <style>
                                                .jezi{
                                                    font-size:3.5em;
                                                    color: white;
                                                }
                                            </style>
                                        </div>
                                </div>

                                   {{--  <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Player information</h3></div>  --}}
                                   <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" data-toggle="tab" href="#home">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#menu1">Carieer</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#menu2">Matches</a>
                                    </li>
                                    <style>
                                        .nav-link{
                                            color: dodgerblue;
                                            font-family: "Lucida Console", "Courier New";

                                        }
                                    </style>
                                  </ul>


                                  <div class="tab-content">
                                    <div id="home" class="container tab-pane active"><br>

                                        <div class="card-body">



                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" >First Name: <b>{{ $player->player_fname }}</b></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" >Last Name: <b>{{ $player->player_lname }}</b></label>
                                                           </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                 <div class="col-md-6">
                                                   <div class="form-group">
                                                     <label class="small mb-1" >Date Of Birth: <b>{{ $player->dob }}</b></label>
                                                        </div>
                                                     </div>
                                                 <div class="col-md-6">
                                                       <div class="form-group">
                                                       <label class="small mb-1" >Age: <b>{{ $dt3 }} Years</b></label>
                                                         </div>
                                                          </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" >Shule Anayosoma: <b>{{ $player->school }}</b></label>
                                                              </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="sel1">Darasa Analosoma: <b>{{ $player->class }}</b></label>

         </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" >Uzito:{{ $player->weight }}</label>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" >Urefu:{{ $player->height }}</label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" >Picha:</label>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" >Nafasi:{{ $player->position }}</label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" >Mguu:{{ $player->foot }}</label>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" >Jezi Namba:{{ $player->jezi }}</label>

                                                        </div>
                                                    </div>
                                                </div>


                                            <style>
                                                .mb-1{
                                                    font-family: Arial, Helvetica, sans-serif;
                                                }
                                            </style>
                                        </div>

                                    </div>
                                    <div id="menu1" class="container tab-pane fade"><br>
                                      <h3>Menu 1</h3>
                                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div id="menu2" class="container tab-pane fade"><br>
                                      <h3>Menu 2</h3>
                                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    </div>
                                  </div>




                               </div>
                           </div>
                       </div>




       </div>
     </div>

</main>

@endsection
