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
            <h3>Buscar provincia de:</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {!! Form::open(['method' => 'POST', 'action'=> 'provinciasController@indexCountry', 'class' =>'form']) !!}
              @include('provincias.partial.paisSelect')
        </div><!-- /.box-body -->
        <div class="box-footer clearfix no-border">
            <div class="form-group">
                <button type="submit" class="btn btn-success">Buscar</button >
            </div>
        </div>
             {!! Form::close() !!}
    </div><!-- /.box -->
    </section><!-- /.content -->
@stop