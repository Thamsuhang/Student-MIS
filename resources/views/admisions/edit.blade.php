@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Admisions
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($admisions, ['route' => ['admisions.update', $admisions->admission_id], 'method' => 'patch']) !!}

                        @include('admisions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection