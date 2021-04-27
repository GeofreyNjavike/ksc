@extends('layouts.admin.geofrey')

@section('content')
 <main>

 <!-- Modal 3-->
    <div class="jumbotron">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;">EDIT HERO/SLIDER CONTENT</h5>
           
          </div>

          <div class="modal-body">


            <form action="{{ URL::to('update/hero/'.$hero->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                 <div class="row">
                   <div class="col-md-4">
                     
                   </div>
                   <div class="col-md-3">
                                                    <input type="hidden"  class="col-md-10" name="old"  >
                                                    <img src=" {{ asset('storage/heros/'.$hero->hero_image) }}" class="rounded-circle img-fluid" >
                                                     </div>
                 </div>
                <div class="row">
                    <div class="container jumbotron">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Kichwa:</label>
                                    <input class="form-control py-4" name="hero_head"   id="inputFirstName" type="text"  required value="{{$hero->hero_head}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Picha</label>
                                    <input class="form-control py-4" name="hero_image"  type="file"  />
                                </div>
                            </div>
                        </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" >Ujumbe:</label>
                                    <textarea class="form-control py-4" name="hero_content"   id="inputFirstName" type="textarea">{{$hero->hero_content}}</textarea>
                                </div>
                            </div>



                          </div>
                  </div>

                  <div class="modal-footer">
                    <input required type="submit"  value="save"  class="btn btn-secondary" style="background-color:#4F42B5">
                  </div>

            </form>
    </div>

        </div>
      </div>
    </div>
  </main>
  @endsection