<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{config('app.name', 'Laravel')}} </title>
    <!-- <title> Charcoal Lanka </title> -->

    <!-- style -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/LS_Style.css') }}" rel="stylesheet">

    <!-- CDN Links -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    @yield('style')
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <nav class="row nav navbar navbar-expand-md navbar-dark main-navbar">
                <div class="col-md-3 navtoggle">
                    <a class="navbar-brand" href="#">Charcoal Lanka</a>
                    <button type="button" class="navbar-toggler float-right" data-toggle="collapse" data-target=".navList" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon nav navbar-nav"></span>
                    </button> 
                </div>
                <div class="col-md-4 searchbar navbar-collapse collapse navList">
                    <form action="#" class="main-searchbar">
                        <span class="fa fa-search form-control-icon"></span>
                        <input type="text" placeholder="Search">
                    </form>
                </div>
                <div class="col-md-5 navbar-collapse collapse navList">
                    <ul class="nav navbar-nav user-data ml-auto">
                        <!-- <li class="icon-user">
                            <a href="#"><i class="fas fa-user"></i> Mahesh Lowe - Laboratory - Admin</a>
                        </li> -->
                        <li class="dropdown icon-user">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                <!-- <i class="fas fa-user"></i>{{ Auth::user()->fname." ".Auth::user()->lname." - ".Auth::user()->department." - ".Auth::user()->user_type}} <span class="caret"></span> -->
                                <i class="fas fa-user"></i>{{ Auth::user()->name}} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu bg-dark">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href="{{url('/changePassword')}}"
                                        onclick="event.preventDefault();
                                                document.getElementById('changepass_form').submit();">
                                        Change Password
                                    </a>
                                    <form id="changepass_form" action="{{url('/changePassword')}}" method="GET" style="display: none;">
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="icon-cog">
                            <a href="#"><i class="fas fa-cog"></i></a>
                        </li>
                        <li class="icon-bell">
                            <a href="#"><i class="fas fa-bell"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row navbar navbar-expand-md navbar-dark main-menubar menu-bar">
                <div class="collapsenavbar-collapse menu-bar navbar-dark bg-dark navList">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Home<span class="caret"></span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li class="nav-item"><a class="nav-link" href="{{url('/dailytask')}}">Daily Task Assignments</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/sop')}}">SOP</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/method')}}">Methods</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/specification')}}">Specifications</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/parameter')}}">Parameters</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/grade')}}">Product Grades</a></li>
                            </ul>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Products<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-left bg-dark">
                                <!-- <li class="nav-item"><a class="nav-link" href="#">Product List</a></li> -->
                                <li class="nav-item"><a class="nav-link" href="{{url('/inprogress')}}">In Progress Productions</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/product')}}">Productions</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Add New Product</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Finished Products</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/result')}}">Insert Analysis Results</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/pending')}}">Pending Analysis</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/kiln')}}">Kiln Analysis</a></li>
                            </ul>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Charcoal<span class="caret"></span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li class="nav-item"><a class="nav-link" href="#">Summery</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Add New Supply</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Supplier Performance Analysis</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Suppliers</a></li>
                            </ul>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>PO<span class="caret"></span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li class="nav-item"><a class="nav-link" href="#">PO List</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Pending Analysis</a></li>
                            </ul>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>ICP<span class="caret"></span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li class="nav-item"><a class="nav-link" href="#">Product Analysis List</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">SOP</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Method</a></li>
                            </ul>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Sample<span class="caret"></span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li class="nav-item"><a class="nav-link" href="{{url('/sample')}}">Sample List</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/addNewSample')}}">Add New Sample</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="#">Add New Bag</a></li> -->
                                <li class="nav-item"><a class="nav-link" href="{{url('/dailySample')}}">Daily Sample Receiving</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/retaining')}}">Retaining</a></li>
                            </ul>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>JSR<span class="caret"></span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li class="nav-item"><a class="nav-link" href="#">JSR Sample List</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Add New JSR</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Completed JSR</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Pending Analysis</a></li>
                            </ul>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Charts & Reports<span class="caret"></span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li class="nav-item"><a class="nav-link" href="#">Performance Evaluations</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Pending Report</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Sample Receiving Frequency</a></li>
                            </ul>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Inventory<span class="caret"></span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li class="nav-item"><a class="nav-link" href="#">Chemicals</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Equipments</a></li>
                            </ul>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Lab Staff<span class="caret"></span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li class="nav-item"><a class="nav-link" href="{{url('/employee')}}">Employee List</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Department Structure</a></li>
                            </ul>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Help<span class="caret"></span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li class="nav-item"><a class="nav-link" href="#">Help..</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-4.6.min.js') }}"></script>

    @yield('script')

</body>
</html>
