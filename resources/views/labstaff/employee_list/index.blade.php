@extends('layouts.main')

@section('style')
<style>
.image-grid {
    margin-top: 10px;
    position: relative;
    display: block;
    overflow: hidden;
    text-align: center;
}

.image-border {
    padding: 3px;
    margin: 3px;
    border: 0px solid #3fb7d2;
    display: block;
    cursor: pointer;
}

.image-layout {
    background: transparent;
    text-align: center;
    display: block;
}

.supplier-image img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    text-align: center;
    font-size: 40px;
    color: white;
    line-height: 95px;
}
</style>
@endsection

@section('content')

<div class="container-fluid">
    <!-- <div class="row"> -->
    <div class="col-md-12 h3 form-inline">
        <h5>Employee List</h5>
        <span class="ml-auto p-2">
            <a class="btn btn-primary" href="{{url('/employee/create')}}">Add Employee</a>
        </span>
    </div>
    <!-- </div> -->
    <div class="row border">
        <div class="col-md-3 col-sm-5">
            <div class="image-grid">
                <div class="image-border">
                    <div class="image-layout">
                        Mahesh Lowe
                        <a href="#">
                            <div class="supplier-image">
                                <img src="{{asset('images/user.png')}}" alt="supplier">
                            </div>
                        </a>
                        <br>
                        <a href="#">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-5">
            <div class="image-grid">
                <div class="image-border">
                    <div class="image-layout">
                        <a href="#">
                            <div class="supplier-image">
                                <img src="{{asset('images/user.png')}}" alt="supplier">
                            </div>
                        </a>
                        <br>
                        <a href="#">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-5">
            <div class="image-grid">
                <div class="image-border">
                    <div class="image-layout">
                        <a href="#">
                            <div class="supplier-image">
                                <img src="{{asset('images/user.png')}}" alt="supplier">
                            </div>
                        </a>
                        <br>
                        <a href="#">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-5">
            <div class="image-grid">
                <div class="image-border">
                    <div class="image-layout">
                        <a href="#">
                            <div class="supplier-image">
                                <img src="{{asset('images/user.png')}}" alt="supplier">
                            </div>
                        </a>
                        <br>
                        <a href="#">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section ('script')
@endsection