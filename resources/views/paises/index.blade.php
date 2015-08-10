@extends('app')

@section('content')
    <section class="content-header">
        <h1>
            Geo
            <small>Ver</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Geo</a></li>
            <li class="active">ver</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3>Paises</h3>
            </div><!-- /.box-header -->
            <div class="box-body">

                @foreach ($paises as $pais)

        <ul class="list-group">
            <li class="list-group-item">
                {{ $pais->name }}
                <div class=" btn-group pull-right">

                {!! Form::model($pais,['method' => 'DELETE', 'action' => ['paisesController@destroy', $pais->id]  ] ) !!}
                <button type="submit"class="btn btn-warning">Elim</button>
                {!! Form::close() !!}

                {!! Form::open(['method' => 'GET', 'action'=> ['paisesController@edit', $pais->id] ]) !!}
                <button type="submit"class="btn btn-success">Editar</button>
                {!! Form::close() !!}
                    </div>
            </li>
        </ul>

    @endforeach
            </div><!-- /.box-body -->
            <div class="box-footer clearfix no-border">

                </div>
            </div>
    </section>
@stop