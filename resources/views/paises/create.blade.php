@extends('app')

@section('content')
    <section class="content-header">
        <h1>
            Geo
            <small>Cargar país</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Geo</a></li>
            <li class="active">Cargar país</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3>Cargar un nuevo país</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
    {!! Form::model($pais, ['action'=> 'paisesController@store']) !!}

    @include('paises.partial.form',["submitButton" => "Agregar pais"])

    {!! Form::close() !!}
    @include('errors.error')
            </div><!-- /.box-body -->
            <div class="box-footer clearfix no-border">

            </div>
        </div>
    </section>
@stop