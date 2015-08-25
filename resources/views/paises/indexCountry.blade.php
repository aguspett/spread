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
        @include('paises.partial.formIndex')
        </div>
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
    <h1> {{ $pais->name}}
      {!! Form::open(['method' => 'GET','action' => array('paisesController@edit', $pais->id) ]) !!}
        <button type="submit"class="btn btn-success pull-right">Editar</button>
        {!! Form::close() !!} </h1>
                </div>
            <div class="box-body">
                @foreach ($pais->provincias as $provincia)
                    <ul class="list-group">
                        <li class="list-group-item" id="{{$provincia->id}}">
                            {{ $provincia->name }}
                            <div class=" btn-group pull-right">

                                 <button token="{{ csrf_token() }}" deleter="provincias" container="li" name="delete" value="{{$provincia->id}}" type="button"class="btn
                                 btn-warning">Elim</button>


                                {!! Form::open(['method' => 'GET', 'action'=> ['provinciasController@edit', $provincia->id] ]) !!}
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