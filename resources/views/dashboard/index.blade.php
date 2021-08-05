@extends('layouts.main')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card-deck">
                <div class="card bg-secondary">
                    <div class="card-header">
                        <h5 class="card-title text-white">Product Control Chart</h5>
                    </div>
                    <div class="card-body">
                        <img class="card-img-top" src="{{ asset('images/ControlChart.png')}}" alt="Card image cap">
                    </div>
                </div>
                <div class="card bg-danger">
                    <div class="card-header">
                        <h5 class="card-title text-white">1<sup>st</sup> Pass Quality & No of Defects</h5>
                    </div>
                    <div class="card-body">
                        <img class="card-img-top" src="{{ asset('images/1stPass.PNG')}}" alt="Card image cap">
                    </div>
                </div>
                <div class="card bg-primary">
                    <div class="card-header">
                        <h5 class="card-title text-white">Sample Receiving Frequency</h5>
                    </div>
                    <div class="card-body">
                        <img class="card-img-top" src="{{ asset('images/SampleReceivingFrequency.PNG') }}" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card-deck">
                <div class="card bg-success">
                    <div class="card-header">
                        <h5 class="card-title text-white">Employee Performance</h5>
                    </div>
                    <div class="card-body">
                        <img class="card-img-top" src="{{ asset('Images/EmployeePerformance.PNG') }}" alt="Card image cap">
                    </div>
                </div>
                <div class="card bg-brown">
                    <div class="card-header">
                        <h5 class="card-title text-white">Analysis Frequency</h5>
                    </div>
                    <div class="card-body">
                        <img class="card-img-top" src="{{ asset('Images/AnalysisFrequency.PNG')}}" alt="Card image cap">
                    </div>
                </div>
                <div class="card bg-warning">
                    <div class="card-header">
                        <h5 class="card-title text-white">New</h5>
                    </div>
                    <div class="card-body">
                        <img class="card-img-top" src="{{ asset('Images/AnalysisFrequency.PNG')}}" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection