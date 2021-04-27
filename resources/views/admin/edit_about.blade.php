@extends('layouts.admin.geofrey')

@section('content')
 <main>

 <!-- Modal 3-->
    <div class="jumbotron">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;">EDIT ABOUT US CONTENT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">


       

<form action="{{ URL::to('update/about/'.$about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="container jumbotron">
                    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" >Kichwa:</label>
                                    <input class="form-control py-4" name="about_head"   id="inputFirstName" type="text"  required value="{{$about->about_head}}" />
                                </div>
                            </div>
                       

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" >Ujumbe:</label>
                                    <textarea  class="form-control py-4" name="about_content"   id="inputFirstName" type="textarea" >{{$about->about_content}}</textarea>
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