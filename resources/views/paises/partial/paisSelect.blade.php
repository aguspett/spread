   <div class="form-group">
    {!! Form::label('paises','Pais:')!!}
    {!! Form::select('paises',$paises , isset($paisId) ? $paisId : 0 ,['id' => 'paises', 'class' => 'form-control', 'palceholder' => 'Seleccione un pais']) !!}
</div>