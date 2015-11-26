@extends('app')

@section('content')

<h2>Subir Correo</h2>
 
    {!! Form::model(new App\Contact, ['route' => ['contact.store']]) !!}
        @include('contact/partials/_form', ['submit_contact' => 'Subir Correo'])
    {!! Form::close() !!}

@endsection