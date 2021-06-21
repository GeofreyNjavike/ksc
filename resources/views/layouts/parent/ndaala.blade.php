<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KSC | Parent</title>
        <link href="{{ asset('adm/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('adm/css/cdn.css') }}" rel="stylesheet" crossorigin="anonymous" />
        <script src="{{ asset('adm/js/cdn.js') }}" crossorigin="anonymous"></script>


    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('home') }}">KSC</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    {{--  <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>  --}}
                   </div>  --}}
                </div>
            </form>
            <!-- Navbar-->


            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> {{ Auth::user()->lname }}</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <a class="nav-link" href="{{ url('home')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                KARIBU
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Msajili Mwanao</a>
                                   <a class="nav-link" href="layout-static.html" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Fanya Malipo</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Testmonies</div>
                            <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Testmonies
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModalk">Toa Ushahidi</a>

                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Tuandikie</div>
                            <a class="nav-link" href="mailto:graduatetz@gmail.com">


                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Email
                            </a>
                            <a class="nav-link" href="https://wa.me/+255712828561?text= Hello habari nahitaji kumsajili mwanangu" class="fa fa-whatsapp">
                                <div class="sb-nav-link-icon"><i class="fab fa-whatsapp"></i></div>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Parent
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                @yield('content')
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Ksc 2020</div>
                            <div>
                                <a href="www.njavikesoftcom.com">Developed By:-</a>
                                &middot;
                                <a href="www.njavikesoftcom.com">Njavike Softcom</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('adm/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('adm/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('adm/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('adm/assets/demo/datatables-demo.js') }}"></script>
    </body>
</html>
