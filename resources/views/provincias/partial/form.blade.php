<div class="form-group">
    {!! Form::label("name", " Nomre:")!!}
    {!! Form::text("name", null, ["class" =>  "form-control"])!!}
</div>
@include('provincias.partial.paisSelect')
<div class="form-group">
    {!! Form::submit( $submitButton, ["class" =>  "btn btn-success"])!!}
</div>