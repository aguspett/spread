

<div class="col-md-4 margin clearfix">
    <div class="box box-primary">
        <div class="box-header">
            <h3>Buscar provincia de:</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
{!! Form::open(['method' => 'get', 'action'=> 'provinciasController@show', 'class' =>'form']) !!}
@include('paises.partial.paisSelect')
@include('provincias.partial.provinciasSelect')
<button type="submit" class="btn btn-success pull-right">Ver</button>
</div><!-- /.box-body -->
<div class="box-footer clearfix no-border">
    <div class="form-group">
    </div>
</div>
{!! Form::close() !!}
        <div class="box-footer">
            @include('errors.error')
        </div>
</div><!-- /.box -->
</div>

@section('jscript')
    <script>
        $().ready( function (){
            getLIstForSelect($('#paises'), '/provincias/list/', $('#provincias'));
        })
        $('#paises').change(function () {
            $('#provincias').empty();
            getLIstForSelect($('#paises'), '/provincias/list/', $('#provincias'));
        });
    </script>
@stop