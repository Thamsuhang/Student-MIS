@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"><i class="fa fa-registered">Roles</i></h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#roleModal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" ><i class="fa fa-plus-circle"> Add new Roles</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('roles.table')
                @include('adminlte-templates::common.errors')
                {!! Form::open(['route' => 'roles.store']) !!}

                @include('roles.fields')

                {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

