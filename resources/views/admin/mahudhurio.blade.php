@extends('layouts.admin.geofrey')

@section('content')
 <main>
    <!-- Modal -->
    <div class="container-fluid">
    <h1 class="mt-4">Mahudhurio</h1>


    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>

        <li class="breadcrumb-item active">Mahudhurio</li>
        <!-- Breadcrumb Menu-->

      </ol>

       <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                   Mahudhurio ya Vijana 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                	 <th>picha</th>
                                    <th>Majina Ya Kijana</th>
                                    <th>Tarehe</th>
                                    <th>Mahudhurio</th>
                                    <th>Actions</th>


                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($atend as $value )
                                <tr>
                                	<td>
                                		<img src="{{ asset('storage/players/'.$value->image) }}" class="rounded-circle" style="height: 70px"; width="70px;" alt="">
                                	</td>
                                	 
                        
                                    <td>{{ $value->player_fname }}  {{ $value->player_lname }}</td>

                                        <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->maendeleo }}</td>
                                    <th>
                                        <a class="btn btn-info" href="{{  url('home') }}">Back</a>


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