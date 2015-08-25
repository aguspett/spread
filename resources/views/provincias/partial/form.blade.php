<div class="form-group">
    {!! Form::label("name", " Nomre:")!!}
    {!! Form::text("name", null, ["class" =>  "form-control"])!!}
</div>
<div class="form-group">
    {!! Form::label('pais_id','Pais:')!!}
    {!! Form::select('pais_id',$paises_list , isset($pais->id)? $pais->id : 0 ,['id' => 'paises', 'class' => 'form-control', 'palceholder' => 'Seleccione un pais']) !!}
</div>
<div class="form-group">
    {!! Form::submit( $submitButton, ["class" =>  "btn btn-success"])!!}
</div>