<style>
    .input-group{
        margin-left: 10px;
    }
</style>

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classes, ['route' => ['classes.update', $classes->class_id], 'method' => 'patch']) !!}

                   <div class="input-group col-md-6">
                       <span class="input-group-addon">Class Name</span>
                       {!! Form::text('class_name', null, ['class' => 'form-control']) !!}
                   </div>
                   <br>

                   <!-- Class Code Field -->
                   <div class="input-group col-sm-6">
                       <span class="input-group-addon">Class Code</span>
                       {!! Form::text('class_code', null, ['class' => 'form-control']) !!}
                   </div>

                   <div class="modal-footer">


                       {!! Form::submit('Edit Class', ['class' => 'btn btn-primary']) !!}
                       <a href="{{route('classes.index')}}" class="btn btn-warning"> Close</a>


                   </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection