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
            <h5>Add New Sample</h5>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-style">
                    <table class="table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</a></td>
                                <td>Produced Date</td>
                                <td>4/1/2021</td>
                            </tr>
                                <td>2</a></td>
                                <td>Produced Time</td>
                                <td>11:53 PM</td>
                            </tr>
                            </tr>
                                <td>3</a></td>
                                <td>MO No.</td>
                                <td>813042512</td>
                            </tr>
                            </tr>
                                <td>4</a></td>
                                <td>Product Plant</td>
                                <td>NM-01</td>
                            </tr>
                            </tr>
                                <td>5</a></td>
                                <td>Size</td>
                                <td>18x40</td>
                            </tr>
                            </tr>
                                <td>6</a></td>
                                <td>Bag No.</td>
                                <td>01</td>
                            </tr>
                            </tr>
                                <td>7</a></td>
                                <td>Barcode</td>
                                <td>L-xxxxxx</td>
                            </tr>
                            </tr>
                                <td>8</a></td>
                                <td>Seal No.</td>
                                <td>S-xxxxxx</td>
                            </tr>
                            </tr>
                                <td>9</a></td>
                                <td>Operator EPF</td>
                                <td>EPF-xx</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card card-style bag-label">
                    <table class="table-sm">
                        <tbody>
                            <tr>
                                <td width>Lot#</td>
                                <td>: C7-030421-055-012x040</td>
                            </tr>
                            <tr>
                                <td>MO#</td>
                                <td>: 8020110700</td>
                            </tr>
                            <tr>
                                <td>Bag#</td>
                                <td>: 155</td>
                            </tr>
                            <tr>
                                <td>Seal#</td>
                                <td>: C1194429</td>
                            </tr>
                            <tr>
                                <td>Date & Time</td>
                                <td>: 4/1/2021 12:17PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="action-buttons">
                    <a href="#" class="btn btn-sm btn-primary createNew"><i class="fa fa-save"></i> Save</a>
                    <a href="#" class="btn btn-sm btn-primary createNew"><i class="fa fa-print"></i> Save & Print</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <table class="table-sm table-striped table-bordered">
                        <thead>
                            <tr>
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
        </div>
    </div>

@endsection

@section('script')
<!-- Include custom script of the page -->
@endsection