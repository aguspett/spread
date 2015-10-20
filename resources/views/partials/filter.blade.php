{!!  Form::open(['route' => 'geo', 'method' => 'post','class'=>'navbar-form navbar-left','role' =>'search']) !!}
<div class="form-group">
    {!!  Form::text('cliente', null, ['class' => 'form-control ','id'=>'navbar-search-input','placeholder' =>'Aplicar filtro cliente' ])  !!}
</div>
<div class="form-group">
    {!!  Form::submit('Submit', ['class' => 'form-control btn btn-sm btn-success']) !!}
</div>
{!! Form::close() !!}