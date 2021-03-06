@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Academics
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($academics, ['route' => ['academics.update', $academics->academic_id], 'method' => 'patch']) !!}

                        @include('academics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection