@extends('layouts.admin.geofrey')

@section('content')
 <main>
    <!-- Modal -->
    <div class="container-fluid">
    <h1 class="mt-4">Malipo</h1>


    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>

        <li class="breadcrumb-item active">Malipo</li>
        <!-- Breadcrumb Menu-->

      </ol>

       <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                   Malipo ya Vijana 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                 
                                     <th>picha</th>
                                    <th>Majina Ya Kijana</th>
                                    <th>Majina Ya Mzazi</th>
                                    <th>Malipo</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Kumbukumbu</th>
                                    <th>Majina Ya Aliyetuma</th>
                                    <th>Actions</th>


                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($pay as $value )
                                <tr>
                                 
                                    <td>

                                        <img src="{{ asset('storage/players/'.$value->image) }}" class="rounded-circle" style="height: 70px"; width="70px;" alt="">
                                    </td>
                                     
                         <td>{{ $value->player_fname }}  {{ $value->player_lname }}</td>
                                         <td>{{ $value->fname }}  {{ $value->lname }}</td>
                                    <td>
                                        
@if($value->payment == 'Payed')
                                            <a class="btn btn-success" data-toggle="modal" metho="post" >{{ $value->payment }}
                                            </a>

                                           @else

                                            <a class="btn btn-warning" data-toggle="modal" metho="post" > {{ $value->payment }}
                                        </a>

                                           @endif

                                    </td>
                                     <td>{{ $value->phone }}</td>
                            <td>{{ $value->email }}</td>
                                    <td>{{ $value->kumbukumbu }}</td>
                                        <td>{{ $value->usajili }}</td>

                                          <td>

                                       @if ( $value->progress == 'Aproved')
                                <a  class="btn btn-success"  >Done
                                </a>
                                @else
                                <a href="{{ URL::to('change/status/'.$value->player_id) }}" class="btn btn-warning"  >Aprove
                                </a>
                                @endif

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
</main>

   @endsection