<div class="col-md-4 margin clearfix">
<div class="box box-primary">
    <div class="box-header">
        <h3>Paises</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
<div class="container-fluyd">

{!! Form::model($paises_list,['method' => 'POST', 'action' => ['paisesController@show'],'class' =>'col-md-12'  ] ) !!}
@include('paises.partial.paisSelect')
<div class="form-group">
    <button type="submit" class="btn btn-success pull-right">Ver</button>
    {!! Form::close() !!}
</div>
</div>
    </div><!-- /.box-body -->
    <div class="box-footer clearfix no-border">

</div>
    </div>
</div>