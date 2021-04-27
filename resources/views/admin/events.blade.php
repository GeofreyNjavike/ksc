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
                                 
                                   
                                    <th>Picha</th>
                                    <th>Tukio</th>
                                     <th>mahali</th>
                                      <th>Muongozaji</th>
                                       <th>Tarehe</th>
                                    <th>Actions</th>


                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($events as $value )
                                <tr>
                                 
                                   
                         <td>

                                        <img src="{{ asset('storage/app/public/events/'.$value->image) }}" class="rounded-circle" style="height: 70px"; width="70px;" alt="">
                                    </td>

                                     <td>{{ $value->tukio }}</td>
                                      
                                        <td>{{ $value->mahali }}</td>
                                          <td>{{ $value->muongozaji }}</td>
                                            <td>{{ $value->tarehe }}</td>
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