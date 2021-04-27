@extends('layouts.admin.geofrey')

@section('content')
 <main>

    <div class="container-fluid">
    <h1 class="mt-4">Jumbe</h1>
<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>

        <li class="breadcrumb-item active">Info</li>
        <!-- Breadcrumb Menu-->

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
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                 News Posted
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="text-align: center;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                 
                                   
                                    <th>FAILI</th>
                                    <th>Content</th>
                                    <th>Actions</th>


                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($info as $value )
                                <tr>
                                 
                                   
                         <td>

                                        <img src="{{ asset('storage/app/public/infos/'.$value->faili) }}" class="rounded-circle" style="height: 70px"; width="70px;" alt="">
                                    </td>

                                     <td>{{ $value->taarifa }}</td>
                                      <td width="400px">
 <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Maada::</b>{{ $value->taarifa}}</h5>
                                            <div class="collapse" id="collapseExample123"><p style="width: 50%">{{ $value->ujumbe}}.</p>
                                               </div>
                                        </div>
                                        <div class="card-footer">
                                              <button type="button" data-toggle="collapse" href="#collapseExample123" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-primary">Soma
                                        </button>                     
                                        </div>
                                    </div>


                                      </td>
                                         <th>
                                        <a class="btn btn-danger" href="{{  URL::to('delete/info/'.$value->id) }}"  onclick="return confirm('Unajaribu kufuta Ujumbe, Are You Sure?')">Delete</a>


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
</main>

   @endsection