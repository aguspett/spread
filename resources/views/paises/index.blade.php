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

           @include('paises.partial.paisSelect');
                <button type="button" class="btn btn-success"> </button>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix no-border">

                </div>
            </div>
    </section>
@stop
@section('footer')
    <script>
        $('#paises').onclick(function(){
            var value = this.value;
            $ajax(){
                method:'GET'

            }
        });
    </script>
@stop