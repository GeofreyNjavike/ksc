@extends('layouts.admin.njavike')

@section('content')




<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        @if($condition  = Session :: get('success'))
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="alert alert-success">
    <p>{{ $condition}}</p>
    </div>

      </div>
      <div class="col-lg-3"></div>
    </div>
    @endif

    @if($condition  = Session :: get('message'))
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="alert alert-danger">
    <p>{{ $condition}}</p>
    </div>

      </div>
      <div class="col-lg-3"></div>
    </div>
    @endif
        <div class="row">
        <div class="col-xl-2 col-md-6">
        </div>
            <div class="col-xl-3 col-md-6">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4"><i class="fas fa-users"></i></div>
                <div class="text-value" style="font-size:30px;">{{ $count_players }}</div><small class="text-muted text-uppercase font-weight-bold">Waliosajiliwa</small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
        </div>
            <div class="col-xl-3 col-md-6">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4"><i class="far fa-futbol"></i></div>
                    <div class="text-value"  style="font-size:30px;">{{ $count_payed }}</div><small class="text-muted text-uppercase font-weight-bold">Waliomaliza Malipo</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
            </div>

            <div class="col-xl-3 col-md-6">

            <div class="card-body">
                <div class="h1 text-muted text-right mb-4"><i class="far fa-comments"></i></i></div>
                <div class="text-value" style="font-size:30px;">{{ $count_emails}}</div><small class="text-muted text-uppercase font-weight-bold">EMAILS</small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              <div></div></div>
            </div>
              <style>
                .card-body {
                    -ms-flex: 1 1 auto;
                    flex: 1 1 auto;
                    padding: 1.25rem;
                }
              </style>
        </div>
<div class="row">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            List ya Vijana Waliosajiliwa
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 10px;">
                    <thead>
                        <tr>

                            <th>Actions</th>
                            <th>Names</th>
                            <th>Date Of Birth</th>
                            <th>Weight</th>
                            <th>Height</th>
                            <th>School</th>
                            <th>Class</th>
                            <th>Medical Issue</th>
                            <th>Disability</th>
                            <th>Parent phone</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                            <th>Actions</th>
                            <th>Names</th>
                            <th>Date Of Birth</th>
                            <th>Weight</th>
                            <th>Height</th>
                            <th>School</th>
                            <th>Class</th>
                            <th>Medical Issue</th>
                            <th>Disability</th>
                            <th>Parent phone</th>
                            <th>Email</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($user as $value )
                        <tr>

                            <td >
                                <a style="font-size: 10px" class="btn btn-danger" href="{{  URL::to('detele/player/'.$value->player_id) }}"  onclick="return confirm('YOU ABOUT TO DELETE A PLAYER, Are You Sure?')"><i class="fas fa-trash-alt"></i>Delete
                                </a>
                                <a style="font-size: 10px" class="btn btn-info" href="{{  URL::to('edit/player/'.$value->player_id) }}"  onclick="return confirm('Are You Sure?')"><i class="fas fa-edit"></i>Edit
                                </a>

                             @if ( $value->progress == 'Aproved')
                                <a  style="font-size: 10px" class="btn btn-success"  >Done
                                </a>
                                @else
                                <a style="font-size: 10px" href="{{ URL::to('change/status/'.$value->player_id) }}" class="btn btn-warning"  > <i class="fas fa-check"></i>Aprove
                                </a>
                                @endif

                            </td>
                            <td>{{ $value->player_fname }} {{ $value->player_lname }}</td>
                            <td>{{ $value->dob }}</td>
                            <td>{{ $value->weight }}</td>
                            <td>{{ $value->height }}</td>
                            <td>{{ $value->school }}</td>
                            <td>{{ $value->class }}</td>
                            <td>{{ $value->medical_issue }}</td>
                            <td>{{ $value->disabled }}</td>
                            <td>

                                <a href="tel:{{ $value->phone }}">{{ $value->phone }}</a>
                                </td>
                            <td>
                                <a href="mailto:{{ $value->email }}"> {{ $value->email }}</a>



                                </td>

                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;">Mahudurio ya Wachezaji</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ url('atendance') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @foreach ($user as $went )

                <div class="row">
                    <div class="container jumbotron">
                        <div class="col-md-3">
                            <img src=" {{ asset('storage/app/public/players/'.$went->image) }}" class="rounded-circle " style="height:
                            70px; width:70px;" >
                            <br>

                            <label style="color: #4F42B5;">{{ $went->player_fname }}</label>


                        </div>


                        <div class="col-md-3">
            <input type="hidden" value="{{ $went['player_id'] }}" name="player_id[]">
                        </div>


                        <div class="col-md-6" type='text'>
                            <label style="text-align: center; color: #4F42B5; padding-left:10px;">Maendeleo</label>
                            <br>


                            <select id="inputState" class="form-control" name="maendeleo[]">
                              <option selected>Yupo</option>
                              <option>Hayupo</option>
                              <option>Dharura</option>
                            </select>


                        </div>
                          </div>
                  </div>
                  @endforeach
                  <div class="modal-footer">
                    <input type="submit"  value="save"  class="btn btn-secondary" >
                  </div>

            </form>
    </div>

        </div>
      </div>
    </div>



    <!-- Modal 2-->
    <div class="modal fade" id="exampleModalx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;"  >USERS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

<div class="row">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
        THE USERS LIST
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 10px;">
                    <thead>
                        <tr>

                            <th>Actions</th>
                            <th>Names</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Position</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($userz as $value )
                        <tr>

                            <td >
                                <a style="font-size: 10px" class="btn btn-danger" href="{{  URL::to('detele/user/'.$value->id) }}"  onclick="return confirm('YOU ABOUT TO DELETE A USER, Are You Sure?')"><i class="fas fa-trash-alt"></i>Delete
                                </a>
                            </td>
                            <td>{{ $value->fname }} {{ $value->lname }}</td>
                            <td><a href="tel:{{ $value->phone }}">{{ $value->phone }}</a></td>
                            <td><a  href="mailto:{{ $value->email }}">{{ $value->email }}</a></td>

                            <td>Coach</td>

                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




    </div>

        </div>
      </div>
    </div>

    <!-- Modal 2-->
    <div class="modal fade" id="exampleModaly" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;"  >Tengeneza</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ url('tukio') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="container jumbotron">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Jina la tukio:</label>
                                    <input  class="form-control py-4" name="tukio"   id="inputFirstName" type="text"  required="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Mahali/Uwanja</label>
                                    <input class="form-control py-4" name="mahali"  type="text" />
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Picha:</label>
                                    <input class="form-control py-4" name="image"   id="inputFirstName" type="file"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Muongozaji/Kocha</label>
                                    <input class="form-control py-4" name="muongozaji"  type="text"  />
                                </div>
                            </div>
                        </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" >Tarehe:</label>
                                    <input class="py-4" name="tarehe"   id="inputFirstName" type="date"  />
                                </div>
                            </div>



                          </div>
                  </div>

                  <div class="modal-footer">
                    <input type="submit"  value="save"  class="btn btn-secondary" style="background-color:  #4F42B5;">
                  </div>

            </form>
    </div>

        </div>
      </div>
    </div>



    <!-- Modal 3-->
    <div class="modal fade" id="exampleModald" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;">Tengeneza Taarifa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">


            <form action="{{ url('taarifa') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="container jumbotron">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Jina la taarifa:</label>
                                    <input class="form-control py-4" name="taarifa"   id="inputFirstName" type="text"  required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Picha</label>
                                    <input class="form-control py-4" name="faili"  type="file"  />
                                </div>
                            </div>
                        </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" >Ujumbe:</label>
                                    <textarea class="form-control py-4" name="ujumbe"   id="inputFirstName" type="textarea"></textarea>
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

 <!-- Modal 3-->
    <div class="modal fade" id="exampleModalhr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;">TENGENEZA HERO/SLIDER CONTENT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">


            <form action="{{ url('hero') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="container jumbotron">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Kichwa:</label>
                                    <input class="form-control py-4" name="hero_head"   id="inputFirstName" type="text"  required/>
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
                                    <textarea class="form-control py-4" name="hero_content"   id="inputFirstName" type="textarea"></textarea>
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


  <!-- Modal 3-->
    <div class="modal fade" id="exampleModalab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;">TENGENEZA ABOUT US CONTENT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">


            <form action="{{ url('about_us') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="container jumbotron">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" >Kichwa:</label>
                                    <input class="form-control py-4" name="about_head"   id="inputFirstName" type="text"  required/>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" >Ujumbe:</label>
                                    <textarea class="form-control py-4" name="about_content"   id="inputFirstName" type="textarea"></textarea>
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

 <!-- Modal 4-->
    <div class="modal fade" id="exampleModalabvid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;">TENGENEZA VIDEO URLs</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">


            <form action="{{ url('video_urls') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="container jumbotron">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" >First Video:</label>
                                    <input class="form-control py-4" name="first_video"   id="first_video" type="text" />
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" >Second Video:</label>
                                    <input class="form-control py-4" name="second_video"   id="second_video" type="text"/>
                                </div>
                            </div>

<ul>
   <div class="alert alert-info">
    <p>You Can Upload Single Or Both Videos</p>
   </div>
    <div class="alert alert-danger">
        <p style="font-size: 12px">Note: <strong>The Video You Are Uploading Will Replace the Availabe Video</strong></p>
    </div>
</ul>

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




    <!-- Modal 5-->
    <div class="modal fade" id="exampleModalc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;">ADD USER</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ url('addUser') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="container jumbotron">
                        <div class="form-row">

                            <div class="col-md-6">
                                <label for="fname" class="small mb-1 col-form-label text-md-right">{{ __('First Name') }}</label>

                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-6">
                                 <label for="lname" class="small mb-1 col-form-label text-md-right">{{ __('Last Name') }}</label>
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="small mb-1 col-form-label text-md-right" >Clearance Level:</label>
                                    <select id="inputState" class="form-control" name="clearance_level">
                              <option selected>10</option>
                              <option>5</option>
                              <option>1</option>
                            </select>

                                </div>
                            </div>


                            <div class="col-md-6">

                                <label for="email" class="small mb-1 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                                <div class="form-row">

                            <div class="col-md-6">
<label for="phone" class="small mb-1 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="+255">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">

                                <label for="password" class="small mb-1 col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            </div>

<ul>
    <div class="alert alert-info">
<p>NOTE:<strong>CLEARANCE LEVEL 1 FOR Parent, CLEARANCE LEVEL 5 For Coach and  CLEARANCE LEVEL 10 for Admin</strong></p>

    </div>
</ul>

                          </div>
                  </div>

                  <div class="modal-footer">
                    <input required type="submit"  value="save"  class="btn btn-secondary" style="background-color:  #4F42B5;">
                  </div>

            </form>
    </div>

        </div>
      </div>
    </div>





</main>


@endsection
