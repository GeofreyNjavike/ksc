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



</main>


@endsection
