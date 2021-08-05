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
        <!-- <h5>In Progress Products</h5> -->
        <!-- <h5>Productions</h5> -->
        <!-- Navigations for product page.. -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-inprogress-tab" data-toggle="tab" href="#nav-inprogress" role="tab"
                    aria-controls="nav-inprogress" aria-selected="true">Inprogress Product List</a>
                <a class="nav-link" id="nav-final-product-tab" data-toggle="tab" href="#nav-final-product" role="tab"
                    aria-controls="nav-final-product" aria-selected="false">Final Product List</a>
                <a class="nav-link" id="nav-new-product-tab" data-toggle="tab" href="#nav-new-product" role="tab"
                    aria-controls="nav-new-product" aria-selected="false">Add New Product</a>
            </div>
        </nav>
        <!-- <hr> -->
        <!-- <a href="#" class="ml-auto btn btn-sm btn-primary createNew"><i class="fa fa-plus"></i> Add New Product</a> -->
    </div>
</div>
<!-- Tab content goes here.... -->
<div class="container-fluid">
    <div class="col-md-12">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-inprogress" role="tabpanel"
                aria-labelledby="nav-inprogress-tab">
                <div class="card card-style">
                    <table class="table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>MO#</th>
                                <th>Grade</th>
                                <th>Size</th>
                                <th>Product Plants</th>
                                <th>No of produced bags</th>
                                <th>No of Approvable bags</th>
                                <th>Action</th>
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
            <div class="tab-pane fade" id="nav-final-product" role="tabpanel" aria-labelledby="nav-final-product-tab">
                <div class="card card-style">
                    <!-- <table class="table-sm table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>MO#</th>
                                    <th>Grade</th>
                                    <th>Size</th>
                                    <th>Product Plants</th>
                                    <th>No of produced bags</th>
                                    <th>No of Approvable bags</th>
                                    <th>Action</th>
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
                        </table> -->
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>MO#</th>
                                <th>Grade</th>
                                <th>Size</th>
                                <th>Final Product Plants</th>
                                <th>No of produced bags</th>
                                <th>No of Approved bags</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left"><a href="#">81203042</a></td>
                                <td class="text-left">Aqua Sorb</td>
                                <td class="text-left">10x20</td>
                                <td class="text-left">Dryer-01</td>
                                <td class="text-left">50</td>
                                <td class="text-left">20</td>
                                <td class="text-center">
                                    <a href="#">View</a><span>&nbsp-&nbsp</span>
                                    <a href="#">Edit</a><span>&nbsp-&nbsp</span>
                                    <a href="#">Remove</a>
                                </td>
                            </tr>
                            <td class="text-left"><a href="#">MO-01</a></td>
                            <td class="text-left">Aqua Sorb</td>
                            <td class="text-left">10x20</td>
                            <td class="text-left">NM-01</td>
                            <td class="text-left">50</td>
                            <td class="text-left">20</td>
                            <td class="text-center">
                                <a href="#">View</a><span>&nbsp-&nbsp</span>
                                <a href="#">Edit</a><span>&nbsp-&nbsp</span>
                                <a href="#">Remove</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-new-product" role="tabpanel" aria-labelledby="nav-new-product-tab">
                <p class="h6 h5-heading">Create New Certificate of Analysis</p>
                <div class="card inprocess-table">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-left">Date</th>
                                <th class="text-left">Specification</th>
                                <th class="text-left">MO number</th>
                                <th class="text-left">Base Materials</th>
                                <th class="text-left">Quantity(lb)</th>
                                <th class="text-left">Shipment Date</th>
                                <th class="text-left">Packging</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left">D-xx xx xxxx</td>
                                <td class="text-left">SP-xx</td>
                                <td class="text-left">Mo-xx</td>
                                <td class="text-left">BM-xxxx</td>
                                <td class="text-left">Q-xx</td>
                                <td class="text-left">SD-xx xx xxxx</td>
                                <td class="text-left">P-xx</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="h6 h5-heading">Preview of CofA</p>
                <div class="card inprocess-table">
                    <table class="table-header">
                        <tr>
                            <td height="69" colspan="2" class="company-name">JACOBI CARBONS LANKA</td>
                            <td height="69" colspan="2" class="cofa-type">INTERNAL CERTIFICATES OF ANALYSIS
                            </td>
                            <td colspan="2" rowspan="2" height="82" class="logo">
                                <img src="../../../../public/Images/logo.png" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="10"></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr class="lot-details">
                            <td height="10" colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr class="lot-details">
                            <td width="9%">Grade</td>
                            <td width="30%">: CS-HAC</td>
                            <td width="9%">Quantity</td>
                            <td width="30%">: 41,400.00 lb</td>
                            <td width="8%">Date</td>
                            <td width="14%">: 26.02.2021</td>
                        </tr>
                        <tr class="lot-details">
                            <td>Mesh</td>
                            <td>: 12x40</td>
                            <td>Packaging</td>
                            <td>: CLACK-CS</td>
                            <td>Shipment Date</td>
                            <td>: </td>
                        </tr>
                        <tr class="lot-details">
                            <td>Specification No.</td>
                            <td>: SP000246</td>
                            <td>Created By</td>
                            <td>: Sisira</td>
                            <td>Designation</td>
                            <td>: Columbus, OH Ramp,US</td>
                        </tr>
                        <tr class="lot-details">
                            <td>Lot No.</td>
                            <td>: 89100770</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Consignee</td>
                            <td>: </td>
                        </tr>
                        <tr class="lot-details">
                            <td height="10" colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                        </tr>
                    </table>
                    <table class="table-analysis-data">
                        <tr class="analysis-headings">
                            <td rowspan="3">Bag No.</td>
                            <td rowspan="3">Description</td>
                            <td rowspan="3">Lot No.</td>
                            <td rowspan="3" width="50">Approved Bag No.</td>
                            <td rowspan="3" width="60">Seal No.</td>
                            <td colspan="5">Particle Size Distribution</td>
                            <td width="50">Moisture Content</td>
                            <td width="50">Apparent Density</td>
                            <td width="50">Iodine</td>
                            <td width="50" rowspan="3">H2S Smell in Iodine Testing</td>
                            <td width="70">H2S Odour HACH</td>
                            <td width="70">Ash</td>
                            <td width="70">DV</td>
                            <td width="80">As Content Prop 65-C</td>
                            <td width="80">Sb Content Prop 65-C</td>
                            <td width="80">Al Content 65-C</td>
                            <td>Hardness</td>
                        </tr>
                        <tr class="analysis-headings">
                            <td colspan="5">ASTM D2862</td>
                            <td>ASTM D2867</td>
                            <td>ASTM D2854</td>
                            <td>ASTM D4607</td>
                            <td>Jacobi T4187</td>
                            <td>ASTM D2866</td>
                            <td>Jacobi T4016</td>
                            <td>Jacobi T4045-65C</td>
                            <td>Jacobi T4045-65C</td>
                            <td>Jacobi T4045-65C</td>
                            <td>ASTM D3802</td>
                        </tr>
                        <tr class="analysis-headings">
                            <td>&gt;7</td>
                            <td>7x12</td>
                            <td>12x40</td>
                            <td>&lt;40</td>
                            <td>&gt;12</td>
                            <td>%</td>
                            <td>g/l</td>
                            <td>mg/g</td>
                            <td>mg/l</td>
                            <td>%</td>
                            <td>%</td>
                            <td>ppb</td>
                            <td>ppb</td>
                            <td>ppb</td>
                            <td>%</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Specification Min</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Specification Max</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Variance(+/-)</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>&nbsp;</td>
                            <td>NM2-260221-055-012x040&nbsp;</td>
                            <td>&nbsp;1</td>
                            <td>&nbsp;L160534</td>
                            <td>&nbsp;0.00</td>
                            <td>&nbsp;0.52</td>
                            <td>&nbsp;98.83</td>
                            <td>&nbsp;0.66</td>
                            <td>&nbsp;0.52</td>
                            <td>&nbsp;1.57</td>
                            <td>&nbsp;569</td>
                            <td>&nbsp;1038.00</td>
                            <td>&nbsp;Pass</td>
                            <td>&nbsp;0.00</td>
                            <td>&nbsp;1.57</td>
                            <td>&nbsp;72.80</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;99.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Specification Min</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Specification Max</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Average</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Minimum</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Maximum</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">STDEV</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Lower Spec</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Upper Spec</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Pp</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Ppk</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Defects (%)</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">PPM &lt; LSL</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">PPM &gt; USL</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Pp Spec.Min</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="limits">
                            <td colspan="5" class="text-left">Pp Spec.Max</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection