@extends('layouts.main')

@section('style')
<!-- include custom styles of this page -->
<style>
.bag-label {
    width: 300px;
    border: 1px solid;
    margin: 0;
    /* position: absolute; */
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, 5px);
}

.action-buttons {
    margin-top: 10px;
    margin-left: 10px;
}
</style>
@endsection

@section('content')
<!-- Include content of the page here.. -->
<div class="container-fluid">
    <div class="form-inline page-heading">
        <h5>Retaining Sample Tracking</h5>
        <a href="#" class="ml-auto btn btn-sm btn-primary createNew"><i class="fa fa-plus"></i>Add New Retain</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-style">
                <table class="table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>MO No.</th>
                            <th>No of Samples</th>
                            <th>No of Boxes</th>
                            <th>Container No.</th>
                            <th>Location ID</th>
                            <th>Box No.</th>
                            <th>Retained By</th>
                            <th>Expiration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background: red;">
                            <td>1</a></td>
                            <td>4/5/2021</td>
                            <td>MO-01</td>
                            <td>xx</td>
                            <td>xx</td>
                            <td>Container-01</td>
                            <td>Loc-ID-</tdtd>
                            <td>Box-xx</td>
                            <td>Rep-xx</td>
                            <td>4/4/2021</td>
                        </tr>
                        <tr>
                            <td>2</a></td>
                            <td>4/5/2021</td>
                            <td>MO-01</td>
                            <td>xx</td>
                            <td>xx</td>
                            <td>Container-01</td>
                            <td>Loc-ID-</tdtd>
                            <td>Box-xx</td>
                            <td>Rep-xx</td>
                            <td>4/4/2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="background: yellow;">Note: Automatically filter after expired</p>
        </div>
    </div>
</div>

@endsection

@section('script')
<!-- Include custom script of the page -->
@endsection