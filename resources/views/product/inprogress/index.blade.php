@extends('layouts.main')

@section('style')
<style>
/* Includes custom styles on this page here */
</style>
@endsection

@section('content')
<!-- Inprocess data table design -->
<div class="container-fluid">
    <div class="form-inline page-heading">
        <h5>In Progress Products</h5>
        <a href="#" class="ml-auto btn btn-sm btn-primary createNew"><i class="fa fa-plus"></i> Add New Product</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-style inprocess-table">
                <table class="table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>MO#</th>
                            <th>Grade</th>
                            <th>Size</th>
                            <th>Product Plants</th>
                            <th>No of produced bags</th>
                            <th>No of Approvable bags</th>
                            <th>Action1231531</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left"><a href="#">81203042</a></td>
                            <td class="text-left">Aqua Sorb</td>
                            <td class="text-left">10x20</td>
                            <td class="text-left">CSP-01,Dryer-01</td>
                            <td class="text-left">50</td>
                            <td class="text-left">20</td>
                            <td class="text-center">
                                <a href="#">View</a><span>&nbsp-&nbsp</span>
                                <a href="#">Edit</a><span>&nbsp-&nbsp</span>
                                <a href="#">Hide</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left"><a href="#">MO-01</a></td>
                            <td class="text-left">Aqua Sorb</td>
                            <td class="text-left">10x20</td>
                            <td class="text-left">CSP-10,CSP-11,CSP-12,NM-01</td>
                            <td class="text-left">50</td>
                            <td class="text-left">20</td>
                            <td class="text-center">
                                <a href="#">View</a><span>&nbsp-&nbsp</span>
                                <a href="#">Edit</a><span>&nbsp-&nbsp</span>
                                <a href="#">Hide</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection