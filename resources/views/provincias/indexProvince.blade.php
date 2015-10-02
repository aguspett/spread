@extends('app')

@section('content')
        <div class="col-md-12 ">
        @include('provincias.partial.formindex')
        </div>
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
    <h1>{{ $provincia->name}}</h1>
      {!! Form::open(['method' => 'GET','action' => array('provinciasController@edit', $provincia->id) ]) !!}
        <button type="submit"class="btn btn-success pull-right">Editar</button>
        {!! Form::close() !!}

                </div>
            <div class="box-body">
                <ul class="list-group">
                @foreach ($partidos as $partido)

                        <li class="list-group-item">
                            {{ $partido->name }}
                            <span class=" btn-group pull-right">

                                 <button token="{{ csrf_token() }}" deleter="partidos" container="li" name="delete" value="{{$partido->id}}" type="button"class="btn
                                btn-xs  btn-warning"><i class="fa fa-trash"></i></button>

                        <a href="{{ action('partidosController@edit',[ $partido->id ] ) }}" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>

                            </span>
                        </li>

                @endforeach
                </ul>
                {!! $partidos->render() !!}
            </div>
            <div class="box-footer clearfix no-border">
            </div>
        </div><!-- /.box-body -->

   </div>


@stop