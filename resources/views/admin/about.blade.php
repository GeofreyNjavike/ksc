@extends('layouts.admin.geofrey')

@section('content')
 <main>

    <div class="container-fluid">
    <h1 class="mt-4">About us Feeds</h1>
<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>

        <li class="breadcrumb-item active">AboutUs</li>
        <!-- Breadcrumb Menu-->

      </ol>

  

       <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                 About us feeds
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="text-align: center;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                 
                                   
                                    <th>Head</th>
                                    <th>Content</th>
                                
                                    <th>Actions</th>


                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($about as $value )
                                <tr>
                                 
                                   
                         <td>{{ $value->about_head }} </td>

                             
                                      <td width="400px">
 <div class="main-card mb-3 card">
                                        <div class="card-body">
                                           
                                            <div class="collapse" id="collapseExample123"><p style="width: 100%">{{ $value->about_content}}.</p>
                                               </div>
                                        </div>
                                        <div class="card-footer">
                                              <button type="button" data-toggle="collapse" href="#collapseExample123" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-primary">Soma
                                        </button>

                                         
                                        </div>
                                    </div>


                                      </td>
                                         <th>
                                        
                                        <a class="btn btn-primary" href="{{  URL::to('edit/about/'.$value->id) }}"  onclick="return confirm('Are You Sure?')">Edit</a>
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