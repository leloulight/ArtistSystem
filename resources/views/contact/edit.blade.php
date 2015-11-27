@extends('app')

@section('content')
<h2>Editar Correo</h2>

{!! Form::model($contact,['method' => 'PATCH','route' =>['contact.update', $contact->id]]) !!}
	@include('contact/partials/_form',['submit_contact' => 'Editar Correo'])
{!! Form::close() !!}

@endsection