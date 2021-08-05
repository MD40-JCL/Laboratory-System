@extends('layouts.main')

@section('style')
    <style>
        /* Includes custom styles on this page here */
    </style>
@endsection

@section('content')
    <!-- Include page body content here -->
    <div class="container-fluid">
        <div class="form-inline page-heading">
            <h5>Parameters</h5>
            <a href="#" class="ml-auto btn btn-primary btn-sm createNew"><i class="fa fa-plus"></i> Create Parameter</a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-style inprocess-table">
                    <table class="table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Parameter</th>
                                <th class="text-left">Method</th>
                                <th class="text-left">SOP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left">1</a></td>
                                <td class="text-left">Iodine</td>
                                <td class="text-left">ASTM-D4607</td>
                                <td class="text-left">SOP-Iodine</td>
                            </tr>
                                <td class="text-left">2</a></td>
                                <td class="text-left">Butane Activity/CTC</td>
                                <td class="text-left">ASTM-D2862</td>
                                <td class="text-left">SOP-Butane Activity/CTC</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-style inprocess-table">
                    Preview the SOP here when click on the SOP.
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
