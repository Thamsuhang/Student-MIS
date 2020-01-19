@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Class Room
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classRoom, ['route' => ['classRooms.update', $classRoom->classroom_id], 'method' => 'patch']) !!}

                        @include('class_rooms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection