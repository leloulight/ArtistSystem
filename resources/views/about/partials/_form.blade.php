<div class = 'form-group col-sm-12'>
	{!! Form::label('header', 'Titulo: ') !!}
	{!! Form::text('header') !!}
</div>

<div class = 'form-group col-sm-12'>
	{!! Form::label('paragraph', 'Descripcion: ') !!}
	{!! Form::text('paragraph') !!}
</div>

<div class = 'form-group col-sm-12'>
	{!! Form::submit($submit_about,['class' => 'btn green']) !!}
</div>
