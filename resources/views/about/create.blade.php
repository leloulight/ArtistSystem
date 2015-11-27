@extends('app')

@section('content')

<h2>Subir Descripción</h2>
 
    {!! Form::model(new App\About, ['route' => ['about.store']]) !!}
     @include('about/partials/_form', ['submit_about' => 'Subir Descripción'])
    {!! Form::close() !!}

@endsection