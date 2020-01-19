@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Courses
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($courses, ['route' => ['courses.update', $courses->course_id], 'method' => 'patch']) !!}

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
                   <!-- Submit Field -->
                   <div class="modal-footer">
                       {!! Form::submit('Save Course', ['class' => 'btn btn-primary']) !!}
                       <a href="{{route('courses.index')}}" class="btn btn-warning"> Close</a>


               </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection