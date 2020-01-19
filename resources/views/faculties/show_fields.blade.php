<!-- Faculty Name Field -->
<div class="form-group">
    {!! Form::label('faculty_name', 'Faculty Name:') !!}
    <p>{{ $faculties->faculty_name }}</p>
</div>

<!-- Faculty Code Field -->
<div class="form-group">
    {!! Form::label('faculty_code', 'Faculty Code:') !!}
    <p>{{ $faculties->faculty_code }}</p>
</div>

<!-- Faculty Desc Field -->
<div class="form-group">
    {!! Form::label('faculty_desc', 'Faculty Desc:') !!}
    <p>{{ $faculties->faculty_desc }}</p>
</div>

<!-- Faculty Status Field -->
<div class="form-group">
    {!! Form::label('faculty_status', 'Faculty Status:') !!}
    <p>{{ $faculties->faculty_status }}</p>
</div>

