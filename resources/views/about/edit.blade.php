@extends('app')

@section('content')

{!! Form::model($about,['method' => 'PATCH','route' =>['about.update', $about->id]]) !!}
@include('about/partials/_form',['submit_about' => 'Editar Descripción'])
{!! Form::close() !!}

@endsection