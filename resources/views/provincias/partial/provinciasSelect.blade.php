<div class="form-group">
    {!! Form::label('provincias_list','Pais:')!!}
    {!! Form::select('provincias_list', isset($provincias_list)? $provincias_list : ['-'] , isset($provincia->id)? $provincia->id : null ,['id' => 'provincias', 'class' => 'form-control', 'palceholder' => 'Seleccione un provincia']) !!}
</div>