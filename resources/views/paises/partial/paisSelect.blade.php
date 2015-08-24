   <div class="form-group">
    {!! Form::label('paises_list','Pais:')!!}
    {!! Form::select('paises_list',$paises_list , isset($pais->id)? $pais->id : 0 ,['id' => 'paises', 'class' => 'form-control', 'palceholder' => 'Seleccione un pais']) !!}
</div>