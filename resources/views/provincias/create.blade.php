@extends('app')

@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Provincias
        <small>Ver</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Provincias</a></li>
        <li class="active">ver</li>
    </ol>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
    <h1>Cargar una nueva provincia</h1>
    <hr>
    {!! Form::model($provincia , ['url'=>'provincias']) !!}

    @include('provincias.partial.form',["submitButton" => "Agregar provinca"])

    {!! Form::close() !!}
    @include('errors.error')
        </div><!-- /.box-body -->
        <div class="box-footer clearfix no-border">

        </div>
    </div>
</section>
@stop