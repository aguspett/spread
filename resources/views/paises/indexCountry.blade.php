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
        <div class="col-md-12">
        @include('paises.partial.formIndex')
        </div>
        <div class="coll-md-12 clearfix">
        <div class="box box-primary">
            <div class="box-header">
    <h1> {{ $pais->name}}
      {!! Form::open(['method' => 'GET','action' => array('paisesController@edit', $pais->id) ]) !!}
        <button type="submit"class="btn btn-success pull-right">Editar</button>
        {!! Form::close() !!} </h1>
                </div>
    @foreach ($pais->provincias as $provincia)
        <ul class="list-group">
            <li class="list-group-item">
                {{ $provincia->name }}
                <div class=" btn-group pull-right">

                    {!! Form::model($provincia,['method' => 'DELETE', 'action' => ['provinciasController@destroy', $provincia->id]  ] ) !!}
                    <button type="submit"class="btn btn-warning">Elim</button>
                    {!! Form::close() !!}

                    {!! Form::open(['method' => 'GET', 'action'=> ['provinciasController@edit', $provincia->id] ]) !!}
                    <button type="submit"class="btn btn-success">Editar</button>
                    {!! Form::close() !!}
                </div>
            </li>
        </ul>
    @endforeach
            <div class="box-footer clearfix no-border">
            </div>
        </div><!-- /.box-body -->

   </div>

    </section>
@stop