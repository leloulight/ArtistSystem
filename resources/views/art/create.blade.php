@extends('app')

@section('content')

<h2>Subir Obra</h2>
 
    {!! Form::model(new App\Art, ['route' => ['art.store'],'files'=>true]) !!}
     @include('art/partials/_form', ['submit_art' => 'Subir Obra'])
    {!! Form::close() !!}

@endsection