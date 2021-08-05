@extends('layouts.main')

@section('style')
<style>
/* Includes custom styles on this page here */
.sample-list table{
    width: 100%;
    /* margin: 2px 2px; */
}
.sample-list td, th{
    border: 1px solid;
    border-color: rgb(201, 198, 198);
}
</style>

@endsection

@section('content')
<!-- Include page content codings here. -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="form-inline page-heading">
                <div class="h5">Insert Analysis Results</div>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ba-tab" data-toggle="tab" href="#ba" role="tab" aria-controls="ba" aria-selected="true">BA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="psd_mc_ad-tab" data-toggle="tab" href="#psd_mc_ad" role="tab" aria-controls="psd_mc_ad-tab" aria-selected="false">PSD-MC-AD</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="i2-tab" data-toggle="tab" href="#i2" role="tab" aria-controls="i2" aria-selected="false">I<sub>2</sub></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="dv-tab" data-toggle="tab" href="#dv" role="tab" aria-controls="dv" aria-selected="false">DV</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ph-tab" data-toggle="tab" href="#ph" role="tab" aria-controls="ph" aria-selected="false">pH</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ash-tab" data-toggle="tab" href="#ash" role="tab" aria-controls="ash" aria-selected="false">Ash</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="h2s-tab" data-toggle="tab" href="#h2s" role="tab" aria-controls="h2s" aria-selected="false">H<sub>2</sub>S</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="cat-tab" data-toggle="tab" href="#cat" role="tab" aria-controls="cat" aria-selected="false">Cat</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="icp-tab" data-toggle="tab" href="#icp" role="tab" aria-controls="icp" aria-selected="false">Metal</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <!-- All sample Tab -->
                <div class="card inprocess-table tab-pane fade show active sample-list" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <table class="table-sm table-striped">
                        <thead>
                            <th>Date</th>
                            <th>Received Time</th>
                            <th>MO#</th>
                            <th>Bag/Composite</th>
                            <th>Seal#</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3/9/2021</td>
                                <td>12.41 PM</td>
                                <td><a href="#">MO-01</a></td>
                                <td>1</td>
                                <td>Seal-01</td>
                                <td>
                                    <a href="#">View</a><span>&nbsp;-&nbsp;</span>
                                    <a href="#">Hide</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- BA/CTC Tab -->
                <div class="inprocess-table tab-pane fade sample-list" id="ba" role="tabpanel" aria-labelledby="ba-tab">
                    <div style="padding-bottom: 5px;">
                        <table class="table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Received Time</th>
                                    <th>MO#</th>
                                    <th>Bag/Composite</th>
                                    <th>Seal#</th>
                                    <th>Utube+Stopper(g)</th>
                                    <th>Utube+Sample(g)</th>
                                    <th>Weight after 15min(g)</th>
                                    <th>Weight after 25min(g)</th>
                                    <th>Butane Activity(%)</th>
                                    <th>Calc. CTC(%)</th>
                                    <th width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>x-1</td>
                                    <td>x-2</td>
                                    <td>x-3</td>
                                    <td>x-4</td>
                                    <td>x-5</td>
                                    <td>x-6</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.42 PM</td>
                                    <td><a href="#">MO-02</a></td>
                                    <td>1</td>
                                    <td>Seal-02</td>
                                    <td>x-1</td>
                                    <td>x-2</td>
                                    <td>x-3</td>
                                    <td>x-4</td>
                                    <td>x-5</td>
                                    <td>x-6</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp-&nbsp</span>
                                        <a href="#">Cancel</a><span>&nbsp-&nbsp</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                            </tbody>
                        
                        </table>
                    </div>
                    
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-success border-success">Save All</button>
                        <button class="btn btn-sm border-secondary">Cancel</button>
                    </div>
                </div>

                <!-- PSD-MC-AD Tab -->
                <div class="inprocess-table tab-pane fade sample-list" id="psd_mc_ad" role="tabpanel" aria-labelledby="psd_mc_ad-tab">
                    <div style="padding-bottom: 5px;">
                        <table class="table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Received Time</th>
                                    <th>MO#</th>
                                    <th>Bag/Composite</th>
                                    <th>Seal#</th>
                                    <th>PSD</th>
                                    <th>Moisture(%)</th>
                                    <th>AD-Volume(ml)</th>
                                    <th>AD-Weight(g)</th>
                                    <th>Calc. AD(g/ml)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>x-1</td>
                                    <td>x-2</td>
                                    <td>x-3</td>
                                    <td>x-4</td>
                                    <td>x-5</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.42 PM</td>
                                    <td><a href="#">MO-02</a></td>
                                    <td>1</td>
                                    <td>Seal-02</td>
                                    <td>x-1</td>
                                    <td>x-2</td>
                                    <td>x-3</td>
                                    <td>x-4</td>
                                    <td>x-5</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp-&nbsp</span>
                                        <a href="#">Cancel</a><span>&nbsp-&nbsp</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-success border-success">Save All</button>
                        <button class="btn btn-sm border-secondary">Cancel</button>
                    </div>
                </div>
                <!-- Iodine Tab -->
                <div class="inprocess-table tab-pane fade sample-list" id="i2" role="tabpanel" aria-labelledby="i2-tab">
                    <div style="padding-bottom: 5px;">  
                        <table class="table-sm table-striped">
                            <thead>
                                <tr>
                                    <th rowspan="2">Date</th>
                                    <th rowspan="2">Received Time</th>
                                    <th rowspan="2">MO#</th>
                                    <th rowspan="2">Bag / Composite</th>
                                    <th rowspan="2">Seal#</th>
                                    <th colspan="3">Carbon Dosage(g)</th>
                                    <th colspan="3">Na<sub>2</sub>S<sub>2</sub>O<sub>3</sub>Volume(ml)</th>
                                    <th rowspan="2">Na<sub>2</sub>S<sub>2</sub>O<sub>3</sub> Concentration</th>
                                    <th rowspan="2">I<sub>2</sub> Concentration</th>
                                    <th rowspan="2">Iodine Number</th>
                                    <th rowspan="2" width="150">Action</th>
                                </tr>
                                <tr>
                                    <th>Point 01</th>
                                    <th>Point 02</th>
                                    <th>Point 03</th>
                                    <th>Volume 01</th>
                                    <th>Volume 02</th>
                                    <th>Volume 03</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>p-1</td>
                                    <td>p-2</td>
                                    <td>p-3</td>
                                    <td>v-1</td>
                                    <td>v-2</td>
                                    <td>v-3</td>
                                    <td>C-xx</td>
                                    <td>I2C-xx</td>
                                    <td>1150</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>p-1</td>
                                    <td>p-2</td>
                                    <td>p-3</td>
                                    <td>v-1</td>
                                    <td>v-2</td>
                                    <td>v-3</td>
                                    <td>C-xx</td>
                                    <td>I2C-xx</td>
                                    <td>1150</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-success border-success">Save All</button>
                        <button class="btn btn-sm border-secondary">Cancel</button>
                    </div>
                </div>
                <!-- DV Tab -->
                <div class="inprocess-table tab-pane fade sample-list" id="dv" role="tabpanel" aria-labelledby="dv-tab">
                    <div style="padding-bottom: 5px;">
                        <table class="table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Received Time</th>
                                    <th>MO#</th>
                                    <th>Bag / Composite</th>
                                    <th>Seal#</th>
                                    <th>DV</th>
                                    <th width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>DV-xx</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>DV-xx</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-success border-success">Save All</button>
                        <button class="btn btn-sm border-secondary">Cancel</button>
                    </div>
                </div>
                <!-- pH Tab -->
                <div class="inprocess-table tab-pane fade sample-list" id="ph" role="tabpanel" aria-labelledby="ph-tab">
                    <div style="padding-bottom: 5px;">
                        <table class="table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Received Time</th>
                                    <th>MO#</th>
                                    <th>Bag / Composite</th>
                                    <th>Seal#</th>
                                    <th>pH</th>
                                    <th width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>pH-xx</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>pH-xx</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-success border-success">Save All</button>
                        <button class="btn btn-sm border-secondary">Cancel</button>
                    </div>
                </div>
                <!-- Ash Tab -->
                <div class="inprocess-table tab-pane fade sample-list" id="ash" role="tabpanel" aria-labelledby="ash-tab">
                    <div style="padding-bottom: 5px;">
                        <table class="table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Received Time</th>
                                    <th>MO#</th>
                                    <th>Bag/Composite</th>
                                    <th>Seal#</th>
                                    <th>Crusible Weight(g)</th>
                                    <th>Crusible+Sample(g)</th>
                                    <th>Crusible+Ash(g)</th>
                                    <th>Calc. Ash(%)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>x-1</td>
                                    <td>x-2</td>
                                    <td>x-3</td>
                                    <td>x-4</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.42 PM</td>
                                    <td><a href="#">MO-02</a></td>
                                    <td>1</td>
                                    <td>Seal-02</td>
                                    <td>x-1</td>
                                    <td>x-2</td>
                                    <td>x-3</td>
                                    <td>x-4</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp-&nbsp</span>
                                        <a href="#">Cancel</a><span>&nbsp-&nbsp</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-success border-success">Save All</button>
                        <button class="btn btn-sm border-secondary">Cancel</button>
                    </div>
                </div>
                <!-- h2S Tab -->
                <div class="inprocess-table tab-pane fade sample-list" id="h2s" role="tabpanel" aria-labelledby="h2s-tab">
                    <div style="padding-bottom: 5px;">
                        <table class="table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Received Time</th>
                                    <th>MO#</th>
                                    <th>Bag / Composite</th>
                                    <th>Seal#</th>
                                    <th>H<sub>2</sub>S</th>
                                    <th width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>H2S-xx</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>H2S-xx</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-success border-success">Save All</button>
                        <button class="btn btn-sm border-secondary">Cancel</button>
                    </div>
                </div>
                <!-- Cat Tab -->
                <div class="inprocess-table tab-pane fade sample-list" id="cat" role="tabpanel" aria-labelledby="cat-tab">
                    <div style="padding-bottom: 5px;">
                        <table class="table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Received Date</th>
                                    <th>Analyzed Date</th>
                                    <th>MO#</th>
                                    <th>Bag/Composite</th>
                                    <th>Seal#</th>
                                    <!-- These parmeter must be dynamic according to the spec -->
                                    <th>Temperature 5min</th>
                                    <th>Temperature 10min</th>
                                    <th>Temperature Max</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>x-1</td>
                                    <td>x-2</td>
                                    <td>x-3</td>
                                    <td>x-4</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.42 PM</td>
                                    <td><a href="#">MO-02</a></td>
                                    <td>1</td>
                                    <td>Seal-02</td>
                                    <td>x-1</td>
                                    <td>x-2</td>
                                    <td>x-3</td>
                                    <td>x-4</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp-&nbsp</span>
                                        <a href="#">Cancel</a><span>&nbsp-&nbsp</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-success border-success">Save All</button>
                        <button class="btn btn-sm border-secondary">Cancel</button>
                    </div>
                </div>
                <!-- Metal Tab -->
                <div class="inprocess-table tab-pane fade sample-list" id="icp" role="tabpanel" aria-labelledby="icp-tab">
                    <div style="padding-bottom: 5px;">
                        <table class="table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Received Date</th>
                                    <th>Analyzed Date</th>
                                    <th>MO#</th>
                                    <th>Bag/Composite</th>
                                    <th>Seal#</th>
                                    <!-- These parmeter must be dynamic according to the spec -->
                                    <th>Para 01</th>
                                    <th>Para 02</th>
                                    <th>Para 03</th>
                                    <th>Para 04</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.41 PM</td>
                                    <td><a href="#">MO-01</a></td>
                                    <td>1</td>
                                    <td>Seal-01</td>
                                    <td>x-1</td>
                                    <td>x-2</td>
                                    <td>x-3</td>
                                    <td>x-4</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Cancel</a><span>&nbsp;-&nbsp;</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3/9/2021</td>
                                    <td>12.42 PM</td>
                                    <td><a href="#">MO-02</a></td>
                                    <td>1</td>
                                    <td>Seal-02</td>
                                    <td>x-1</td>
                                    <td>x-2</td>
                                    <td>x-3</td>
                                    <td>x-4</td>
                                    <td>
                                        <a href="#">Save</a><span>&nbsp-&nbsp</span>
                                        <a href="#">Cancel</a><span>&nbsp-&nbsp</span>
                                        <a href="#">Hide</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-success border-success">Save All</button>
                        <button class="btn btn-sm border-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
/* Includes custom styles on this page here */
</script>

@endsection