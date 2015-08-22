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
              @include('paises.partial.paisSelect')
              @include('provincias.partial.provinciasSelect')
        </div><!-- /.box-body -->
        <div class="box-footer clearfix no-border">
            <div class="form-group">
           </div>
        </div>
             {!! Form::close() !!}
    </div><!-- /.box -->
    </section><!-- /.content -->
@stop
@section('jscript')
    <script>
        var id = $('#paises').val();
       $('#paises').on('change', function () { $.ajax({
            url: "/provincias/list/"+id,
            type: "GET",
                      success: function (data){
               alert(data);
            }

        })
           });
    </script>
@stop