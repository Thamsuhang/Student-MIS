<div class="modal fade left" id="semesterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="semesterModal"><i class="fa fa-registered">Semesters</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
<!-- Semester Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester_name', 'Semester Name:') !!}
    {!! Form::text('semester_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester_code', 'Semester Code:') !!}
    {!! Form::text('semester_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester_duration', 'Semester Duration:') !!}
    {!! Form::text('semester_duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Description Field -->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('semester_description', 'Semester Description:') !!}
    {!! Form::textarea('semester_description', null, ['class' => 'form-control']) !!}
</div>

 <div class="modal-footer">


                    {!! Form::submit('Create Semester', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('semesters.index') }}" class="btn btn-default">Cancel</a>


                </div>
            </div>
        </div>
    </div>
</div>
