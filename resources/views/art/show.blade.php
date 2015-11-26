@extends('app')



@section('content')

    <h6 class = "right btn regresar">
        {!! link_to_route('art.index','Regresar') !!}
    </h6>

    <div class = "col-sm-6">
        <br>
        <h2>
            {{$art->name}}
        </h2>

        <h5>
            Size:{{$art->width}} x {{$art->height}}
        </h5>

        @if($art->active === 1)
            <h5>Active: Yes</h5>
        @else
            <h5>Active: No</h5>
        @endif
    </div>   

    <div class = 'col-sm-6'>
       {{$art->imageURL}}
    </div>

@endsection