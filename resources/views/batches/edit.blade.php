
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Batches
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($batches, ['route' => ['batches.update', $batches->batch_id], 'method' => 'patch']) !!}

                   <div class="form-group col-md-6">
                       {!! Form::label('batch', 'Batch Year:') !!}
                       {!! Form::text('batch', null, ['class' => 'form-control']) !!}
                   </div>

                   <!-- Submit Field -->

                   <div class="modal-footer">


                       {!! Form::submit('Edit Batch', ['class' => 'btn btn-primary']) !!}
                       <a href="{{route('batches.index')}}" class="btn btn-warning"> Close</a>


                   </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection