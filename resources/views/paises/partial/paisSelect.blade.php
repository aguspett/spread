   <div class="form-group">
    {!! Form::label('paises','Pais:')!!}
    {!! Form::select('paises',$paises , isset($pais->id)? $pais->id : 0 ,['id' => 'paises', 'class' => 'form-control', 'palceholder' => 'Seleccione un pais']) !!}
</div>