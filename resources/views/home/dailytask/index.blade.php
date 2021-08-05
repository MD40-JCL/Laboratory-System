@extends('layouts.main')

@section('style')
    <style>
        /* Includes custom styles on this page here */
        .availability ul{
            list-style-type: none;
            margin: auto;
            padding-left:0px;
        }

    </style>
@endsection

@section('content')
    <!-- Include page body content here -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 page-heading form-inline">
                <p class="h5 h5-heading">
                    Daily Task Assignments
                </p>
            </div>
            <div class="col-md-9 page-heading form-inline">
                <div class="navbar-expand navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item nav-link">
                                Date:
                            </li>
                            <span class="nav-item nav-link"> - </span>
                            <li class="nav-item nav-link">
                                2021-04-10
                            </li>
                            <span class="nav-item nav-link"> - </span>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Time<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">Morning (06.00am - 14.00pm)</li>
                                    <li class="dropdown-item">Evening (14.00pm - 22.00pm)</li>
                                    <li class="dropdown-item">Night (22.00pm - 06.00am)</li>
                                </ul>
                            </li>
                            <span class="nav-item nav-link"> - </span>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Shift<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">Shift A</li>
                                    <li class="dropdown-item">Shift B</li>
                                    <li class="dropdown-item">Shift C</li>
                                    <li class="dropdown-item">Shift D</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Employee Name</th>
                                <th>Category</th>
                                <th>Availability</th>
                                <th>Daily Task</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="nav-item">
                                    Mahesh Lowe
                                </td>
                                <td>Section Supervisor</td>
                                <td class="availability">
                                    <ul>
                                        <li class="nav-item">
                                            <a href="#" class="navbar-light" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Availability<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item">Available</li>
                                                <li class="dropdown-item">Absent</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-left">CTC,ID,Ash</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Incudes custom scripts on this page here
    </script>
    
@endsection
