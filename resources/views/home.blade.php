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
        <div class="row">
            <div class="col-xl-3 col-md-6">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4"><i class="fas fa-users"></i></div>
                <div class="text-value">972</div><small class="text-muted text-uppercase font-weight-bold">Registered</small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
        </div>
            <div class="col-xl-3 col-md-6">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4"><i class="far fa-futbol"></i></div>
                    <div class="text-value">385</div><small class="text-muted text-uppercase font-weight-bold">Full Participating</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4"><i class="fas fa-bed"></i></div>
                    <div class="text-value">28%</div><small class="text-muted text-uppercase font-weight-bold">Poor Participating</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
            </div>
            <div class="col-xl-3 col-md-6">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4"><i class="far fa-comments"></i></i></div>
                <div class="text-value">87.500</div><small class="text-muted text-uppercase font-weight-bold">Comments</small>
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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Actions</th>
                            <th>First Name</th>
                            <th>Last Name</th>

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
                            <th>#</th>
                            <th>Actions</th>
                            <th>First Name</th>
                            <th>Last Name</th>

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
                            <td>{{ $value->player_id }}</td>
                            <td width=200px;>
                                <a class="btn btn-danger" href="{{  URL::to('detele/player/'.$value->player_id) }}"  onclick="return confirm('Are You Sure?')"><i class="fas fa-trash-alt"></i>
                                </a>
                                <a class="btn btn-info" href="{{  URL::to('edit/player/'.$value->player_id) }}"  onclick="return confirm('Are You Sure?')"><i class="fas fa-edit"></i>
                                </a>

                             @if ( $value->progress == 'Aproved')
                                <a  class="btn btn-success"  >Done
                                </a>
                                @else
                                <a href="{{ URL::to('change/status/'.$value->player_id) }}" class="btn btn-warning"  >Aprove
                                </a>
                                @endif

                            </td>
                            <td>{{ $value->player_fname }}</td>
                            <td>{{ $value->player_lname }}</td>
                            <td>{{ $value->dob }}</td>
                            <td>{{ $value->weight }}</td>
                            <td>{{ $value->height }}</td>
                            <td>{{ $value->school }}</td>
                            <td>{{ $value->class }}</td>
                            <td>{{ $value->medical_issue }}</td>
                            <td>{{ $value->disabled }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ $value->email }}</td>

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

                <div class="container jumbotron">
                    <div class="row">
                        <div class="col-md-3">
                            <img src=" {{ asset('storage/players/'.$went->image) }}" class="rounded-circle " style="height:
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
    <div class="modal fade" id="exampleModaly" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;">Tengeneza</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ url('tukio') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container jumbotron">
                    <div class="row">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Jina la tukio:</label>
                                    <input class="form-control py-4" name="tukio"   id="inputFirstName" type="text"  />
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
                                    <input class="form-control py-4" name="tarehe"   id="inputFirstName" type="date"  />
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
                <div class="container jumbotron">
                    <div class="row">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Jina la taarifa:</label>
                                    <input class="form-control py-4" name="taarifa"   id="inputFirstName" type="text"  required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Faili</label>
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
                    <input type="submit"  value="save"  class="btn btn-secondary" style="background-color:  #4F42B5;">
                  </div>

            </form>
    </div>

        </div>
      </div>
    </div>




    <!-- Modal 4-->
    <div class="modal fade" id="exampleModalc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;">Hifadhi Magoli</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ url('magoli') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container jumbotron">
                    <div class="row">
                        <div class="form-row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="small mb-1" >Jina la Mchezaji:</label>
                                    <select name="player_fname" id="player_fname" class="form-select" >

                                    @foreach ($user as $value )

                                        <option value="{{ $value->player_id }}" >{{ $value->player_fname }}</option>


                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Idadi Ya Magoli</label>
                                    <input class="form-control py-4" name="magoli"  type="number"  required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="small mb-1" >Maoni Ya Kocha:</label>
                                    <input class="form-control py-4" name="maoni"  type="text"  required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" >Tarehe</label>
                                    <input class="form-control py-4" name="tarehe_ya_magoli"  type="date"  required/>
                                </div>
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





</main>


@endsection
