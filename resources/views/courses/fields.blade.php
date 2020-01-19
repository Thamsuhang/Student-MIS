

<div class="modal fade left" id="courseModal" tabindex="-1" style="border-radius: 5px;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseModal"><i class="fa fa-registered">Courses</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Course Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('course_name', 'Course Name:') !!}
                    {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Course Code Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('course_code', 'Course Code:') !!}
                    {!! Form::text('course_code', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Course Desc Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('course_desc', 'Course Desc:') !!}
                    {!! Form::textarea('course_desc', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Status Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('status', 'Status:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('status', 0) !!}
                        {!! Form::checkbox('status', '1', null) !!}
                    </label>
                </div>
            </div>

            <!-- Submit Field -->
            <div class="modal-footer">
                {!! Form::submit('Save Course', ['class' => 'btn btn-primary']) !!}
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>