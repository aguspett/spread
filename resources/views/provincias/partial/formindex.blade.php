
    <div class="box box-primary">
        <div class="box-header">
            <h3>Buscar provincia de:</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
{!! Form::open(['method' => 'Post', 'action'=> 'provinciasController@search', 'class' =>'form']) !!}
@include('geo.paises.partial.paisSelect')
<button type="submit"  class="btn btn-success pull-right">Ver</button>
            {!! Form::close() !!}
</div><!-- /.box-body -->
<div class="box-footer clearfix no-border">
          @include('errors.error')
        </div>

</div><!-- /.box -->

@section('jscript')
    <script>


        $().ready( function (){
            if ($('#paises').val() != 0){
                $('#paises').trigger("change");
            }
            getLIstForSelect($('#paises'),url, $('#provincias'));
        })
        $('#paises').change(function () {
            $('#provincias').empty();
            getLIstForSelect($('#paises'), url, $('#provincias'));

        });
    </script>
@stop