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
            @foreach ($parent as $value11)
            @if($value11->payment=='Not Payed')
            <ul>
                <div class="alert alert-warning">
<p>
Tafadhari lipa shillingi 10,000/= Kukamilisha Usajili wa Mwanao
</p>
                </div>
            </ul>
            @endif
            @endforeach
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
                                    <th>Majina</th>
                                    <th>Usajili</th>
                                     <th>Maendeleo ya Mwanao</th>
                                    <th>MALIPO</th>
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
                                    <td>{{ $value->player_fname }}  {{ $value->player_lname }}</td>

                                    <td >

                                        @if($value->progress == 'Pending')
                                            <a style="font-size: 10px;" class="btn btn-warning" data-toggle="modal" metho="post" >{{ $value->progress }}
                                            </a>


                                            @elseif($value->progress == 'Declined')

                                            <a   style="font-size: 10px" ; class="btn btn-danger" data-toggle="modal" metho="post" > {{ $value->progress }}
                                            </a>

                                           @else

                                            <a   style="font-size: 10px;" class="btn btn-info" data-toggle="modal" metho="post" > {{ $value->progress }}
                                        </a>

                                           @endif


                                </td>
                              <td><a href="{{url('showPlayer/'.$value->player_id)}}" class="btn btn-info btn-lg" style="font-size: 10px;"><i class="fas fa-eye"></i> View</a></td>
                                    <td>

@if($value->payment == 'Payed')
                                            <a style="font-size: 10px" class="btn btn-success" data-toggle="modal" metho="post" >{{ $value->payment }}
                                            </a>

                                           @else

                                            <a style="font-size: 10px" class="btn btn-warning" data-toggle="modal" metho="post" > {{ $value->payment }}
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
                                        <a class="btn btn-danger" href="{{  URL::to('detele/player/'.$value->player_id) }}"  onclick="return confirm('Are You Sure?')">Delete</a>


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
                                            <input class="py-4" name="dob" id="inputEmailAddress" type="date" aria-describedby="emailHelp" placeholder="Enter email date of birth" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >Uzito</label>
                                                    <input class="form-control py-4" name="weight" id="inputFirstName" type="text" placeholder="Enter weight (Kg)" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >Urefu  </label>
                                                    <input class="form-control py-4" name="height" id="inputLastName" type="text" placeholder="Enter height (CM)" />
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



<!-- Modal 2 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-body">
        <!-- Modal content-->
          <div class="modal-content">


                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4" style="color: #0077be; font-size: 15px;">FANYA MALIPO KUKAMILISHA USAJILI WA MWANAO</h3></div>
                                 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">
        <span> <img src="{{ asset('assets/img/M-pesa.png') }}" width="20" height="20"> </span>
          M-PESA</a></li>
    <li><a data-toggle="tab" href="#menu1" style="colour: blue;">       <span> <img src="{{ asset('assets/img/TigoPesa.jpg') }}" width="20" height="20"> </span> TIGO PESA</a></li>
    <li><a data-toggle="tab" href="#menu2">       <span> <img src="{{ asset('assets/img/airtel.png') }}" width="20" height="20"> </span> AIRTEL MONEY</a></li>
  </ul>

    <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="card-body">
                                    <form action="{{ URL::to('malipo') }}" method="POST">
                                        @csrf
                                      <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >1. PIGA <b>*150*00#</b></label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >2. CHAGUA <b>(1) TUMA PESA</b></label>

                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label class="small mb-1" >3. CHAGUA <b>(1) WEKA NAMBA YA SIMU</b></label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="small mb-1" >4. ANDIKA <b> 0765133861</b></label>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                     <label class="small mb-1" >5. ANDIKA KIASI</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                         <label class="small mb-1" >6. ANDIKA NYILA YAKO</label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="small mb-1" for="sel1">7. THIBITISHA JINA <b>PETER MADOSH</b></label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

     <label class="small mb-1" >8. ANDIKA <b>1</b></label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="small mb-1" for="sel2">Jina La Usajili</label>
                                                  <input type="text" name="usajili" class="form-control" required="Tafadhari Jaza Taarifa" placeholder="Jina la Usajili wa laini ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="sel2">Kumbukumbu Namba</label>
<input type="text" name="kumbukumbu" class="form-control" required="Tafadhari Jaza Taarifa" placeholder="Jaza Namba ya muamala">
                                                     </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4 mb-0">

                                            <input type="submit" class="btn btn-primary btn-block" value="Thibitisha Malipo">
                                        </div>
                                    </form>
                                </div>
    </div>
    <div id="menu1" class="tab-pane fade">

       <div class="card-body">
                                    <form action="{{ URL::to('malipo') }}" method="POST">
                                        @csrf
                                      <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >1. PIGA <b>*150*01#</b></label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >2. CHAGUA <b>(3) TUMA MITANDAO MINGINE</b></label>

                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label class="small mb-1" >3. CHAGUA <b>(3) M-PESA</b></label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="small mb-1" >4. ANDIKA <b> 0765133861</b></label>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                     <label class="small mb-1" >5. ANDIKA KIASI</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="sel1">7. THIBITISHA JINA <b>PETER MADOSH</b></label>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="small mb-1" >6. ANDIKA NYILA YAKO</label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

     <label class="small mb-1" >8. ANDIKA <b>1</b></label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="small mb-1" for="sel2">Jina La Usajili</label>
                                                  <input type="text" name="usajili" class="form-control" required="Tafadhari Jaza Taarifa" placeholder="Jina la Usajili wa laini ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="sel2">Kumbukumbu Namba</label>
<input type="text" name="kumbukumbu" class="form-control" required="Tafadhari Jaza Taarifa" placeholder="Jaza Namba ya muamala">
                                                     </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4 mb-0">

                                            <input type="submit" class="btn btn-primary btn-block" value="Thibitisha Malipo">
                                        </div>
                                    </form>
                                </div>
    </div>
    <div id="menu2" class="tab-pane fade">
       <div class="card-body">
                                    <form action="{{ URL::to('malipo') }}" method="POST">
                                        @csrf
                                      <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >1. PIGA <b>*150*60#</b></label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" >2. CHAGUA <b>(2) TUMA MITANDAO MINGINE</b></label>

                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label class="small mb-1" >3. CHAGUA <b>(2) M-PESA</b></label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="small mb-1" >3. CHAGUA <b>(1) INGIZA NAMBA </b></label>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label class="small mb-1" >4. ANDIKA <b> 0765133861</b></label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">


                                                     <label class="small mb-1" >5. ANDIKA KIASI</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                       <label class="small mb-1" for="sel1">6. THIBITISHA JINA <b>PETER MADOSH</b></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

    <label class="small mb-1" >7. ANDIKA NYILA YAKO</label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="small mb-1" for="sel2">Jina La Usajili</label>
                                                  <input type="text" name="usajili" class="form-control" required="Tafadhari Jaza Taarifa" placeholder="Jina la Usajili wa laini ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="sel2">Kumbukumbu Namba</label>
<input type="text" name="kumbukumbu" class="form-control" required="Tafadhari Jaza Taarifa" placeholder="Jaza Namba ya muamala">
                                                     </div>
                                            </div>
                                        </div>


                                        <div class="form-group mt-4 mb-0">

                                            <input type="submit" class="btn btn-primary btn-block" value="Thibitisha Malipo">
                                        </div>
                                    </form>
                                </div>
    </div>
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



    <!-- Modal 2-->
    <div class="modal fade" id="exampleModalk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #4F42B5;"  >Toa ushuhuda Juu ya KSC</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

 <form action="{{ url('testmony') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="container jumbotron">


                        <div class="form-row">



                            <div class="col-md-12">
<label for="phone" class="small mb-1 col-form-label text-md-right">{{ __('Shuhuda') }}</label>

                                <textarea id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="ushuhuda" value="{{ old('ushuhuda') }}" required autocomplete="ushuhuda" autofocus placeholder="+255" >


                                @error('ushuhuda')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </textarea>

                            </div>

   <div class="col-md-12">

                                <label for="parent_image" class="small mb-1 col-form-label text-md-right">{{ __('Picha Yako') }}</label>
                                <input id="parent_image" type="file" class="form-control @error('parent_image') is-invalid @enderror" name="parent_image" required autocomplete="new-parent_image">

                                @error('parent_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


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
