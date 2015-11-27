@extends('app')

@section('content')

    <h6 class = "right btn regresar">
        {!! link_to_route('about.index','Regresar') !!}
    </h6>

    <div class = "col-sm-12">
        <br>
        <h2>
            {{$about->header}}
        </h2>

        <h4>Descripción</h4>
        <h5>
            {{$about->paragraph}} 
        </h5>

    </div>   

    

@endsection