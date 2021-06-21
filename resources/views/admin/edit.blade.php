@extends('layouts.admin.geofrey')

@section('content')
 <main>
    <!-- Modal -->
    <div class="container-fluid">
    <h1 class="mt-4">Edit</h1>


    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>

        <li class="breadcrumb-item active">Edit</li>
        <!-- Breadcrumb Menu-->

      </ol>

   </div>
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">


            <!-- Modal content-->




                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Player information</h3></div>
                                    <div class="card-body">
                                        <form action="{{ URL::to('update/player/'.$player->player_id) }}" method="POST" enctype="multipart/form-data">





                                        
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-3">
                                                    <input type="hidden"  class="col-md-10" name="old"  >
                                                    <img src=" {{ asset('storage/players/'.$player->image) }}" class="rounded-circle img-fluid" >
                                                     </div>
                                            </div>

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
                                                        <label class="small mb-1" >Je Mwanao ni mlemavu?: <b>{{ $player->disabled }}</b></label>
    <br> </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="sel2">Je Anamatatizo ya kiafya?: <b>{{ $player->medical_issue }}</b></label>
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Uzito:</label>
                                                        <input class="form-control py-4" name="weight" id="inputFirstName" type="text"  value="{{ $player->weight }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Urefu</label>
                                                        <input class="form-control py-4" name="height" id="inputLastName" type="text" value="{{ $player->height }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Picha:</label>
                                                        <input class="form-control py-4" name="image" id="inputFirstName" type="file"  required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Nafasi</label>
                                                        <input class="form-control py-4" name="position"  id="inputLastName" type="text" value="{{ $player->position }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Mguu:</label>
                                                        <input class="form-control py-4" name="foot"   id="inputFirstName" type="text" value="{{ $player->foot }}"  />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Jezi Namba</label>
                                                        <input class="form-control py-4" name="jezi"  type="text" value="{{ $player->jezi }}" />
                                                    </div>
                                                </div>
                                            </div>
                                           
                                    

                                           
                                            <div class="form-group mt-4 mb-0">

                                                <input type="submit" class="btn btn-primary btn-block" value="Update">

                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>




        </div>
      </div>

 </main>

@endsection
