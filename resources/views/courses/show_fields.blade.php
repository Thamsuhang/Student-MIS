<!-- Course Name Field -->
<div class="form-group">
    {!! Form::label('course_name', 'Course Name:') !!}
    <p>{{ $courses->course_name }}</p>
</div>

<!-- Course Code Field -->
<div class="form-group">
    {!! Form::label('course_code', 'Course Code:') !!}
    <p>{{ $courses->course_code }}</p>
</div>

<!-- Course Desc Field -->
<div class="form-group">
    {!! Form::label('course_desc', 'Course Desc:') !!}
    <p>{{ $courses->course_desc }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $courses->status }}</p>
</div>

