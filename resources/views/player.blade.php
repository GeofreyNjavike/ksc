@extends('layouts.out1')
@section('content')

   <main id="main">
   <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Nyumbani</a></li>
          <li>taarifa</li>
        </ol>
      
      </div>
    </section><!-- End Breadcrumbs -->


    
    
 @foreach ( $player_news as $value )

    <!-- ======= Portfolio Details Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container">

        <div class="row">
          <div class="row gy-4">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("{{ asset('storage/players/'.$value->image) }}");' data-aos="zoom-in" data-aos-delay="100">
            <a href="{{$value->url}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7">
            <div class="portfolio-info">
              <h3>{{$value->player_fname}} {{$value->player_lname}}</h3>
              <ul>
                <div class="row">
                  <div class="col-sm-4">
                    <li><strong>Nafasi</strong>: {{$value->position}}</li>
                
                  </div>
                  <div class="col-sm-4">
                    <li ><strong >Mguu:</strong> {{ $value->foot}} </li>
                  </div>
                  <div class="col-sm-4">
                    <li><strong>Passing</strong>: {{$value->passing}} /10</li>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <li><strong>Dribbling </strong>: {{$value->dribbling}} /10</li>
                
                  </div>
                  <div class="col-sm-4">
                    <li ><strong >Receiving </strong> {{ $value->receiving}} /10</li>
                  </div>
                  <div class="col-sm-4">
                    <li><strong>Turning </strong>: {{$value->turning}} /10</li>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-sm-4">
                    <li><strong>Shooting </strong>: {{$value->shooting}} /10</li>
                
                  </div>
                  <div class="col-sm-4">
                    <li ><strong >Running </strong> {{ $value->running}} /10</li>
                  </div>
                  <div class="col-sm-4">
                    <li><strong>Jaggling </strong>: {{$value->jaggling}} /10</li>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-sm-6">
                    <li><strong>Total Goals </strong>: {{$value->magoli}} Goals</li>
                
                  </div>
                  <div class="col-sm-6">
                    <li ><strong >Coach Opinions </strong> {{ $value->maoni}}</li>
                  </div>
                 
                </div>
              </ul>
            </div>
            <div class="portfolio-description">
            </div>
          </div>

        </div>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
     
 @endforeach

     <!-- ======= Portfolio Details Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container">

        <div class="row">
          <div class="row gy-4">

          <div class="col-lg-5" >
           
          </div>

          <div class="col-lg-7">
            <div class="portfolio-info">
              <h3>MAHUDHURIO</h3>
              <ul>
                <div class="row">
                  <div class="col-sm-4">
                    <li><strong>Siku alizohudhuria</strong>: SIKU {{$days_attended}}</li>
                
                  </div>
                  <div class="col-sm-4">
                    <li ><strong >Kiasi kwa kila siku:</strong>  2000 TZS</li>
                  </div>
                  <div class="col-sm-4">
                    <li><strong>Kiasi Unachodaiwa</strong>: {{$days_attended*2000}} TZS</li>
                  </div>
                </div>
                <hr>
                <div class="row">
                  @if($days_attended >=1)
@foreach($player_news as $value)
<div class="col-sm-6">
                    <li><a href=" {{ URL::to('downloadInvoice/'.$value->player_id) }}" class="btn btn-info btn-lg" style="font-size: 10px;"><i class="fa fa-download" aria-hidden="true"></i>
Download Invoice</a></td></li>
                
                  </div>
                  @endforeach
                  @else
                  <div class="col-sm-6">
                    <li><a href=" {{ URL::to('home') }}" class="btn btn-info btn-lg" style="font-size: 10px;"><i class="fa fa-download" aria-hidden="true"></i>
Processing Your Invoice</a></td></li>
                
                  </div>
                  @endif
                  <hr>
                  <div class="col-sm-6">
                   <li><a href="{{url('home')}}" class="btn btn-primary btn-lg" style="font-size: 10px;"><i class="fas fa-undo"></i>Dashboard</a></td>
                                   </li>
                  </div>
                  
                </div>

              </ul>
            </div>
            
          </div>

        </div>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->



 

   </main>
    {{--  src="{{ asset('storage/players/'.$value->image) }}"  --}}
@endsection