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


    
    
 @foreach ($infoz as $infoz )

    <!-- ======= Portfolio Details Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container">

        <div class="row">
          <div class="row gy-4">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("{{ asset('storage/infos/'.$infoz->faili) }}");' data-aos="zoom-in" data-aos-delay="100">
            <a href="https://youtu.be/foiOZCm5Ooc" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7">
            <div class="portfolio-info">
              <h3>{{$infoz->taarifa}}</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li style="font-size: 12px;"><strong >Imechapishwa::</strong> {{ $infoz->created_at}} </li>
              </ul>
            </div>
            <div class="portfolio-description">
             
              <p>
              {{ $infoz->ujumbe }}
                 </p>
            </div>
          </div>

        </div>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
     
 @endforeach

   <section id="news" class="testimonials section-bg">
        <div class="container">
<div class="row">
<h3>Habari Mchanganyiko</h3>
<hr>
@foreach($info as $value)
<div class="col-lg-4">
  
   <img src="{{ asset('storage/infos/'.$value->faili) }}" alt="Notebook" style="width:100%;" class="rounded">
  <div class="content">
   <a href="{{URL:: to('taarifa/'.$value->id)}}" style="color:#0077be;"><h6 style=" font-weight: 900;">{{ $value->taarifa}}</h6></a>
   
  </div>

</div>

@endforeach


</div>

        </div>
      </section>



 

   </main>
    {{--  src="{{ asset('storage/players/'.$value->image) }}"  --}}
@endsection