@extends('layouts.main')

@section('style')
<!-- Include custom styles related to this page -->
@endsection

@section('content')
<!-- Include content of this page -->
<div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="form-inline page-heading">
                    <h4>Sample List</h4>
                    <a href="#" class="ml-auto btn btn-sm btn-primary createNew"><i class="fa fa-plus"></i>Add New Bag</a>
                </div>
                <div class="card">
                    <table class="table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>MO#</th>
                                <th>Plant</th>
                                <th>Size</th>
                                <th>Bag#</th>
                                <th>Barcode</th>
                                <th>Seal#</th>
                                <th>Operator EPF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">4/1/2021</a></td>
                                <td>4:48 PM</td>
                                <td><a href="#">MO-xx</a></td>
                                <td><a href="#">P-xx</a></td>
                                <td>2x8</td>
                                <td>B-xx</td>
                                <td>BC-xx</td>
                                <td>S-xx</td>
                                <td><a href="#">EPF-xx</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-inline page-heading">
                    <h4>Sample Frequency Analysis</h4>
                </div>
                <div class="card">
                    <div class="card bg-success">
                        <div class="card-header">
                            <h5 class="card-title text-white">Sample Frequency</h5>
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="../../../../public/Images/SampleReceivingFrequency.PNG" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!-- Include custom script here -->
@endsection

