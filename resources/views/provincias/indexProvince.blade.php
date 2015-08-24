@extends('app')

@section('content')
    <section class="content-header">

        <h1>
            Geo
            <small>Ver</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/paises"><i class="fa fa-dashboard"></i>Geo</a></li>
            <li class="active">ver</li>
        </ol>
    </section>
    <section class="content">

        <div class="col-md-12 ">

        @include('provincias.partial.formindex')
        </div>
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
    <h1> {{ $provincia->name}}
      {!! Form::open(['method' => 'GET','action' => array('provinciasController@edit', $provincia->id) ]) !!}
        <button type="submit"class="btn btn-success pull-right">Editar</button>
        {!! Form::close() !!} </h1>
                </div>
            <div class="box-body">
                @foreach ($provincia->partidos as $partido)
                    <ul class="list-group">
                        <li class="list-group-item">
                            {{ $partido->name }}
                            <div class=" btn-group pull-right">

                                {!! Form::model($partido,['method' => 'DELETE', 'action' => ['partidosController@destroy', $partido->id]  ] ) !!}
                                <button type="submit"class="btn btn-warning">Elim</button>
                                {!! Form::close() !!}

                                {!! Form::open(['method' => 'GET', 'action'=> ['partidosController@edit', $partido->id] ]) !!}
                                <button type="submit"class="btn btn-success">Editar</button>
                                {!! Form::close() !!}
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>
            <div class="box-footer clearfix no-border">
            </div>
        </div><!-- /.box-body -->

   </div>

    </section>
@stop