@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Classes</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#classModal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"> Add new class</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('classes.table')
                @include('adminlte-templates::common.errors')


                {!! Form::open(['route' => 'classes.store']) !!}

                @include('classes.fields')

                {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

