@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Days
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($days, ['route' => ['days.update', $days->days_id], 'method' => 'patch']) !!}

                        @include('days.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection