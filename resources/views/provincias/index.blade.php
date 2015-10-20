@extends('app')

@section('content')
    <div class="col-md-12 ">
        @include('provincias.partial.formindex')
    </div>
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <h1>{{ $provincias->first()->pais->name}}</h1>
                {!! Form::open(['method' => 'GET','action' => array('provinciasController@edit', $provincias->first()->pais->id) ]) !!}
                <button type="submit"class="btn btn-success pull-right">Editar</button>
                {!! Form::close() !!}

            </div>
            <div class="box-body">
                <ul class="list-group">
                    @foreach ($provincias as $provincia)

                        <li class="list-group-item">
                            {{ $provincia->name }}
                            <span class=" btn-group pull-right">

                                 <button token="{{ csrf_token() }}" deleter="partidos" container="li" name="delete" value="{{$provincia->id}}" type="button"class="btn
                                btn-xs  btn-warning"><i class="fa fa-trash"></i></button>

                        <a href="{{ action('provinciasController@edit',[ "paisId"=> $provincia->pais->id, "provinciaId" => $provincia->id ] ) }}" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="{{ action('partidosController@index',[ "paisId"=> $provincia->pais->id, "provinciaId" => $provincia->id ] ) }}" class="btn btn-xs btn-success"><i class="fa fa-look"></i></a>

                            </span>
                        </li>

                    @endforeach
                </ul>
                {!! $provincias->render() !!}
            </div>
            <div class="box-footer clearfix no-border">
            </div>
        </div><!-- /.box-body -->

    </div>


@stop