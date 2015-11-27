@extends('app')



@section('content')

    <h6 class = "right btn regresar">
        {!! link_to_route('contactform.index','Regresar') !!}
    </h6>

    <div class = "col-sm-12">
        <br>
        <h2> {{$contact->name}}   </h2>

        <h5> Subject:{{$contact->subject}} </h5>

        <p><a class="text-info" href="mailto:{{ $contact->email }}">{{$contact->email}}</a></p>
            
        <p>{{ $contact->message }}</p>

    </div>   

@endsection