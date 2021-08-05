<div class="modal fade" id="gradeModal1" tabindex="-1" role="dialog" aria-labelledby="gradeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gradeModalLabel">Add New Grade</h5>
                <a type="button" class="btn close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form action="/grade" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="newGrade">Grade Name</label>
                        <input type="text" class="form-control" id="newGrade" name="gradeName" aria-describedby="gradeHelp" placeholder="Enter grade" value="{{ old('name') }}">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a type="submit" class="btn btn-sm btn-primary createNew grade-submit">Create Grade</a>
                <a type="button" class="btn btn-sm btn-secondary createNew" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>