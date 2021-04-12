@extends('layouts.admin.geofrey')

@section('content')
 <main>

    <div class="container-fluid">
    <h1 class="mt-4">Jumbe</h1>
<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>

        <li class="breadcrumb-item active">Jumbe</li>
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
                 Jumbe Kutoka kwa wadau
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="text-align: center;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                 
                                   
                                    <th>Majina</th>
                                    <th>Email</th>
                                    <th></th>
                                    <th>Actions</th>


                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($email as $value )
                                <tr>
                                 
                                   
                         <td>{{ $value->customer_name }} </td>

                                     <td><a href="mailto:{{ $value->customer_email }}">{{ $value->customer_email }}</a></td>
                                      <td width="400px">
 <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Maada::</b>{{ $value->customer_subject}}</h5>
                                            <div class="collapse" id="collapseExample123"><p style="width: 50%">{{ $value->customer_message}}.</p>
                                               </div>
                                        </div>
                                        <div class="card-footer">
                                              <button type="button" data-toggle="collapse" href="#collapseExample123" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-primary">Soma
                                        </button>

                                            <a href="mailto:{{$value->customer_email}}">Jibu:  <i class="fas fa-envelope" style="font-size: 20px;"></i></a>

                                         
                                        </div>
                                    </div>


                                      </td>
                                         <th>
                                        <a class="btn btn-danger" href="{{  URL::to('detele/email/'.$value->id) }}"  onclick="return confirm('Unajaribu kufuta Ujumbe, Are You Sure?')">Delete</a>


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