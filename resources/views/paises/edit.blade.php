@extends ('app')

@section('content')
    <section class="content-header">
        <h1>
            Geo
            <small>Editar país</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/paises/"><i class="fa fa-dashboard"></i>Geo</a></li>
            <li class="active">Editar país</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3>Editar: {!! $pais->name !!}</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
    {!! Form::model($pais,['method' => 'PATCH', 'action'=> ['paisesController@update', $pais->id]]) !!}
   @include('paises.partial.form',["submitButton" => "Guardar Cambios"])

    {!! Form::close() !!}

@include('errors.error')
            </div><!-- /.box-body -->
            <div class="box-footer clearfix no-border">

            </div>
        </div>
    </section>
    @stop
