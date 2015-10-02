
    <div class="box box-primary">
        <div class="box-header">
            <h3>Buscar provincia de:</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
{!! Form::open(['method' => 'get', 'action'=> 'provinciasController@show', 'class' =>'form']) !!}
@include('paises.partial.paisSelect')
@include('provincias.partial.provinciasSelect')
<button type="button" id="viewProvince" class="btn btn-success pull-right">Ver</button>
            {!! Form::close() !!}
</div><!-- /.box-body -->
<div class="box-footer clearfix no-border">
          @include('errors.error')
        </div>
</div><!-- /.box -->

@section('jscript')
    <script>

        $().ready( function (){
            getLIstForSelect($('#paises'), '/provincias/list/', $('#provincias'));
        })
        $('#paises').change(function () {
            $('#provincias').empty();
            getLIstForSelect($('#paises'), '/provincias/list/', $('#provincias'));
        });
        $('#viewProvince').click(function (){
            var url = '/provincias/'+$('#provincias').val();
            $(location).attr("href", url);
        });
    </script>
@stop