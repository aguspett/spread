<div class="form-group">
    {!! Form::label('pais','Pais:')!!}

    {!! Form::select('paises', $paises ,null,['id' => 'paises', 'class' => 'form-control', 'palceholder' => 'Seleccione un pais']) !!}
</div>