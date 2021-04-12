@extends('layouts.out1')
@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Kikosi</li>
      </ol>
      <h2>Kikosi</h2>

    </div>
  </section>




    <div class="container">

<div>

</div>

<div class="row ">
    <font color="#ed502e" face="cursive" style="text-align: center;"><b>Makipa</b></font>

   <hr/>
   @foreach ($kipa as $kp )
   <div class="col-lg-1">

   </div>
  <div class="col-lg-3 breadcrumbs" >
   <div class="form-row">
       <div class="col-md-4">

       </div>

       <div class="row">
           <div class="col-sm-3">
                   <img src=" {{ asset('storage/app/public/players/'.$kp->image) }}" class="rounded-circle img-fluid" style="height: 70px; width:70px;">

           </div>

           <div class="col-sm-3">
               <label class="small mb-1" style="font-family: Georgia, serif;   font-size: 10px; "><b>{{ $kp->player_fname }}</b></label>
               <br>

<label class="small mb-1"  >

   <i class="fas fa-tshirt" style="font-size: 25px;"></i><span class="badge rounded-pill bg-info text-dark"  style="position: absolute;">{{  $kp->jezi }}</span>

   </label>
   <br>

<a href="{{  URL::to('show/player/'.$kp->player_id) }}" style="font-size: 10px;  ">View</a>


           </div>

       </div>
       <br>


   </div>

  </div>
  @endforeach
</div>

<div class="row ">
    <font color="#ed502e" face="cursive" style="text-align: center;"><b>Mabeki</b></font>

   <hr/>
   @foreach ($beki as $kp )
   <div class="col-lg-1">

   </div>
  <div class="col-lg-3 breadcrumbs" >
   <div class="form-row">
       <div class="col-md-4">

       </div>

       <div class="row">
           <div class="col-sm-3">
                   <img src=" {{ asset('storage/app/public/players/'.$kp->image) }}" class="rounded-circle img-fluid" style="height: 70px; width:70px;">

           </div>

           <div class="col-sm-3">
               <label class="small mb-1" style="font-family: Georgia, serif;   font-size: 10px; "><b>{{ $kp->player_fname }}</b></label>
               <br>

<label class="small mb-1"  >

   <i class="fas fa-tshirt" style="font-size: 25px;"></i><span class="badge rounded-pill bg-info text-dark"  style="position: absolute;">{{  $kp->jezi }}</span>

   </label>
   <br>

<a href="{{  URL::to('show/player/'.$kp->player_id) }}" style="font-size: 10px;">View</a>


           </div>

       </div>
       <br>


   </div>

  </div>
  @endforeach
</div>
<div class="row">
    <font color="#ed502e" face="cursive" style="text-align: center;"><b>Mawinga</b></font>
    <hr/>
    @foreach ($winga as $kp )
    <div class="col-lg-1">

    </div>
   <div class="col-lg-3 breadcrumbs" >
    <div class="form-row">
        <div class="col-md-4">

        </div>

        <div class="row">
            <div class="col-sm-3">
                    <img src=" {{ asset('storage/app/public/players/'.$kp->image) }}" class="rounded-circle img-fluid" style="height: 70px; width:70px;">

            </div>

            <div class="col-sm-3">
                <label class="small mb-1" style="font-family: Georgia, serif;   font-size: 10px; "><b>{{ $kp->player_fname }}</b></label>
                <br>

<label class="small mb-1"  >

    <i class="fas fa-tshirt" style="font-size: 25px;"></i><span class="badge rounded-pill bg-info text-dark"  style="position: absolute;">{{  $kp->jezi }}</span>

    </label>
    <br>

<a href="{{  URL::to('show/player/'.$kp->player_id) }}" style="font-size: 10px;">View</a>


            </div>

        </div>
        <br>


    </div>

   </div>
   @endforeach
</div>

<div class="row">
    <font color="#ed502e" face="cursive" style="text-align: center;"><b>Viungo</b></font>
    <hr/>
    @foreach ($kiungo as $kp )
    <div class="col-lg-1">

    </div>
   <div class="col-lg-3 breadcrumbs">
    <div class="form-row">
        <div class="col-md-4">

        </div>

        <div class="row">
            <div class="col-sm-3">
                    <img src=" {{ asset('storage/app/public/players/'.$kp->image) }}" class="rounded-circle img-fluid" style="height: 70px; width:70px;">

            </div>

            <div class="col-sm-3">
                <label class="small mb-1" style="font-family: Georgia, serif;   font-size: 10px; "><b>{{ $kp->player_fname }}</b></label>
                <br>

<label class="small mb-1"  >

    <i class="fas fa-tshirt" style="font-size: 25px;"></i><span class="badge rounded-pill bg-info text-dark"  style="position: absolute;">{{  $kp->jezi }}</span>

    </label>
    <br>

<a href="{{  URL::to('show/player/'.$kp->player_id) }}" style="font-size: 10px;">View</a>


            </div>

        </div>
        <br>


    </div>

   </div>
   @endforeach
</div>

<div class="row">
    <font color="#ed502e" face="cursive" style="text-align: center;"><b>Washambuliaji</b></font>

    <hr/>
    @foreach ($mshambuliaji as $kp )
    <div class="col-lg-1">

    </div>
   <div class="col-lg-3 breadcrumbs">
    <div class="form-row">
        <div class="col-md-4">

        </div>

        <div class="row">
            <div class="col-sm-3">
                    <img src=" {{ asset('storage/app/public/players/'.$kp->image) }}" class="rounded-circle img-fluid" style="height: 70px; width:70px;">

            </div>

            <div class="col-sm-3">
                <label class="small mb-1" style="font-family: Georgia, serif;   font-size: 10px; "><b>{{ $kp->player_fname }}</b></label>
                <br>

<label class="small mb-1"  >

    <i class="fas fa-tshirt" style="font-size: 25px;"></i><span class="badge rounded-pill bg-info text-dark"  style="position: absolute;">{{  $kp->jezi }}</span>

    </label>
    <br>

<a href="{{  URL::to('show/player/'.$kp->player_id) }}" style="font-size: 10px;">View</a>


            </div>

        </div>
        <br>


    </div>

   </div>
   @endforeach
</div>
    </div>


  </section>



@endsection
