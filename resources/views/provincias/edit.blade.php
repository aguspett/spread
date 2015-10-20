@extends ('app')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
    <h1>Editar: {!! $provincia->name !!}</h1>
            </div><!-- /.box-header -->
            <div class="box-body">


    {!! Form::model($provincia,['method' => 'PATCH', 'action'=> ['provinciasController@update',  $provincia->pais->id, $provincia->id ] ]) !!}
   @include('provincias.partial.form',["submitButton" => "Guardar Cambios"])
            </div><!-- /.box-header -->
            <div class="box-body">
    {!! Form::close() !!}

@include('errors.error')
            </div><!-- /.box -->
    </section><!-- /.content -->
    @stop
