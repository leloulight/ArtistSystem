@extends('app')

@section('content')
<h2>Editar Obra</h2>

{!! Form::model($art,['method' => 'PATCH','route' =>['art.update', $art->id], 'files'=>true]) !!}
@include('art/partials/_form',['submit_art' => 'Editar Obra'])
{!! Form::close() !!}

@endsection