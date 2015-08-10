<div class="form-group">
    {!! Form::label('pais','Pais:')!!}

    {!! Form::select('pais_id', $paises ,null,['id' => 'paises', 'class' => 'form-control', 'palceholder' => 'Seleccione un pais']) !!}
</div>