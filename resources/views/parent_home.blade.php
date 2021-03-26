@extends('layouts.parent.ndaala')

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
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">Wanaodaiwa</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Mahundulio Mazuri</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Taarifa ya Vijana Wako
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Maendeleo</th>
                                    <th>Date Of Birth</th>
                                    <th>Weight</th>
                                    <th>Height</th>
                                    <th>School</th>
                                    <th>Class</th>
                                    <th>Medical Issue</th>
                                    <th>Disability</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($parent as $value )
                                <tr>
                                    <td>{{ $value->player_id }}</td>
                                    <td>{{ $value->player_fname }}</td>
                                    <td>{{ $value->player_lname }}</td>
                                    <td>

                                        @if($value->progress == 'Pending')
                                            <a class="btn btn-warning" data-toggle="modal" metho="post" >{{ $value->progress }}
                                            </a>


                                            @elseif($value->progress == 'Declined')

                                            <a class="btn btn-danger" data-toggle="modal" metho="post" > {{ $value->progress }}
                                            </a>

                                           @else

                                            <a class="btn btn-info" data-toggle="modal" metho="post" > {{ $value->progress }}
                                        </a>

                                           @endif

                                </td>
                                    <td>{{ $value->dob }}</td>
                                    <td>{{ $value->weight }}</td>
                                    <td>{{ $value->height }}</td>
                                    <td>{{ $value->school }}</td>
                                    <td>{{ $value->class }}</td>
                                    <td>{{ $value->medical_issue }}</td>
                                    <td>{{ $value->disabled }}</td>
                                    <th>
                                        <a class="btn btn-danger" href="{{  URL::to('detele/product/'.$value->player_id) }}"  onclick="return confirm('Are You Sure?')">Delete</a>


                                    </th>


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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <!-- Modal content-->
          <div class="modal-content">



                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Msajili Mwanao</h3></div>
                                <div class="card-body">
                                    <form action="{{ URL::to('msajili') }}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >Jina La Kwanza</label>
                                                    <input class="form-control py-4" name="player_fname" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >Jina La Mwisho</label>
                                                    <input class="form-control py-4" name="player_lname" id="inputLastName" type="text" placeholder="Enter last name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" >Tarehe Ya Kuzaliwa</label>
                                            <input class="form-control py-4" name="dob" id="inputEmailAddress" type="date" aria-describedby="emailHelp" placeholder="Enter email date of birth" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >Uzito</label>
                                                    <input class="form-control py-4" name="weight" id="inputFirstName" type="text" placeholder="Enter weight" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >Urefu</label>
                                                    <input class="form-control py-4" name="height" id="inputLastName" type="text" placeholder="Enter height" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >Shule Anayosoma</label>
                                                    <input class="form-control py-4" id="inputPassword"  name="school" type="text" placeholder="Enter school" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="sel1">Darasa Analosoma</label>

  <select class="form-control" id="sel1" name="class">
    <option>Darasa la kwaza</option>
    <option>Darasa la pili</option>
    <option>Darasa la tatu</option>
    <option>Darasa la nne</option>
    <option>Darasa la tano</option>
    <option>Darasa la sita</option>
    <option>Darasa la saba</option>
    <option>Darasa la >7</option>

  </select></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >Je Mwanao ni mlemavu?</label>
<br>
                                                    <label class="radio-inline"><input type="radio" name="disabled" value="Ndiyo" checked> Hapana</label>
                                                    <label class="radio-inline"><input type="radio" name="disabled" value="Hapana"> Ndiyo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="sel2">Je Anamatatizo ya kiafya?</label>

  <select class="form-control" id="sel2" name="medical_issue">
    <option>Hapana</option>
    <option>Ndiyo</option>
    <option>Sijui</option>

  </select>
                                                     </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4 mb-0">

                                            <input type="submit" class="btn btn-primary btn-block" value="Msajili">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
      </div>

    </div>
  </div>
</div>




</main>
@endsection
