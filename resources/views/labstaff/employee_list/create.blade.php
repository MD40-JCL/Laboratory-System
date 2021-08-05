@extends ('layouts.main')

@section('style')

<style>
.border {
    padding: 5px 5px;
    margin: 5px 5px;
}
</style>

@endsection

@section('content')
<!-- <div class="container-fluid">
    <div class="col-md-12 h3 form-inline">
        <h5>Add New Employee</h5>
    </div>
    <form method="POST" action="{{url('/addSupplier')}}">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="card card-style">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
                        <tr>
                            <td width=50%>First Name</td>
                            <td width=50%><input type="text" id="fname" name="fname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" id="lname" name="lname" class="form-control"></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div> -->
<div class="container">
    <div class="form-inline page-heading">
        <h5>Add New Employee</h5>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="card card-style inprocess-table">
                <table class="table-sm">
                    <tbody>
                        <tr>
                            <td class="text-left">First Name</td>
                            <td class="text-left"><input type="text" id="fname" name="fname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Last Name</td>
                            <td class="text-left"><input type="text" id="lname" name="lname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="text-left">EPF Number</td>
                            <td class="text-left"><input type="text" id="lname" name="lname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Employee Category</td>
                            <td class="text-left"><input type="text" id="lname" name="lname" class="form-control"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
@endsection