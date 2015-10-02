@extends('app')

@section('content')

         @include('paises.partial.formIndex')

        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
    <h1> {{ $pais->name}}</h1>
     <span class="pull-right">
         <a href="{{ action('paisesController@edit',[ $pais->id ] ) }}" class="btn btn-xs btn-success">editar</a>
                </span>
                </div>

            <div class="box-body">
                <ul class="list-group">
                @foreach ($pais->provincias as $provincia)

                        <li class="list-group-item" id="{{$provincia->id}}">
                            {{ $provincia->name }}
                            <span class=" btn-group pull-right">

                                 <button token="{{ csrf_token() }}" deleter="provincias" container="li" name="delete" value="{{$provincia->id}}" type="button"class="btn
                                btn-xs  btn-danger"><i class="fa fa-trash"></i></button>

                        <a href="{{ action('provinciasController@edit',[ $provincia->id ] ) }}" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>

                            </span>
                        </li>

                @endforeach
                </ul>
            </div>
            <div class="box-footer  no-border">
            </div>
        </div><!-- /.box-body -->

   </div>

@stop