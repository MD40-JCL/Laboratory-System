@extends('layouts.main')

@section('style')
<style>
    /* include custom styles here: . . . .; */
</style>
@endsection

@section('content')
<!-- include custom content of the web page -->
<div class="container-fluid">
        <div class="form-inline page-heading">
            <h5>Pending Analysis</h5>
            <a href="#" class="ml-auto btn btn-sm btn-primary createNew"><i class="fa fa-print"></i> Print</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-style inprocess-table">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>MO#</th>
                                <th>Bag No.</th>
                                <th>Size</th>
                                <th>Product Plants</th>
                                <th>Pending Parameter</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left"><a href="#">81203042</a></td>
                                <td class="text-left">1</td>
                                <td class="text-left">10x20</td>
                                <td class="text-left">CSP-01</td>
                                <td class="text-left">Iodine</td>
                                <td class="text-center">
                                    <a href="#">View</a><span>&nbsp-&nbsp</span>
                                    <a href="#">Edit</a><span>&nbsp-&nbsp</span>
                                    <a href="#">Hide</a>
                                </td>
                            </tr>
                                <td class="text-left"><a href="#">MO-01</a></td>
                                <td class="text-left">5.1</td>
                                <td class="text-left">10x20</td>
                                <td class="text-left">CSP-10</td>
                                <td class="text-left">Butane Activity</td>
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

@section('script')
<script>
    // include custom scripts on this page here....
</script>
@endsection