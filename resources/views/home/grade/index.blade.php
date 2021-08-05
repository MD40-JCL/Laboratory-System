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
            <h5>Product Grades</h5>
            <div class="ml-auto">
                <form action="/grade" method="post">
                {{csrf_field()}}
                    <input type="text" class="form-control form-control-sm" name="gradeName" autocomplete="off" required>
                    <!-- <button class="ml-auto btn btn-primary btn-sm createNew" id="createModal">
                        <i class="fa fa-plus"></i> Create Grade
                    </button> -->
                    <a type="submit" href="#" class="ml-auto btn btn-primary btn-sm createNew" id="createModal">
                        <i class="fa fa-plus"></i> Create Grade
                    </a>
                </form>
            </div>
            <!-- <input type="text" class="ml-auto form-control">
            <a href="#" class="ml-auto btn btn-primary btn-sm createNew" data-toggle="modal" data-target="#gradeModal"><i class="fa fa-plus"></i> Create Grade</a> -->
        </div>
        <!-- @include('home.grade.grade-form') -->
        <div class="row">
            <div class="col-md-4">
                <div class="card card-style">
                    <table class="table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Grade</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($grades as $grade)
                            <tr>
                                <td>1</td>
                                <td>{{ $grade->gradeName }}</td>
                                <td class="text-center">
                                    <a href="{{url('/grade/$grade->id/edit')}}" data-toggle="modal" data-target="#gradeModal">Edit</a>&nbsp<span>-</span>
                                    <a href="#">Delete</a>
                                </td>
                            </tr>
                            @empty
                                <p>No Grade to display</p>
                            @endforelse
                    
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-style inprocess-table">
                    Preview the Grade description here when click on the grade name.
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Incudes custom scripts on this page here
        $(document).ready(function(){
            $('body').on('click','.grade-submit', function(e){
                $(this.form).submit();
                var data = $('#newGrade').val();
                console.log(data);
                $('#gradeModal').modal('hide');
            })
        });
    </script>
    
@endsection
