<div class = 'form-group col-sm-12'>
	{!! Form::label('nombre', 'Nombre: ') !!}
	{!! Form::text('name') !!}
</div>

<div class = 'form-group col-sm-6'>
	{!! Form::label('width', 'Ancho: ') !!}
	{!! Form::text('width') !!}
</div>


<div class = 'form-group col-sm-6'>
	{!! Form::label('height','Largo: ') !!}
	{!! Form::text('height') !!}
</div>

<div class = 'form-group col-sm-6'>
	{!! Form::label('image', 'Imagen') !!}
	{!! Form::file('image')!!}
</div>

<div class = 'form-group col-sm-12'>
	{!! Form::submit($submit_art,['class' => 'btn green']) !!}
</div>
