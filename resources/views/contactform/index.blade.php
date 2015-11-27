@extends('app')


@section('content')

<h2>Tus mensajes</h2>
@if ( !$contacts->count() )
    No tienes mensajes.
@else

     <table class = "bordered">
     	<thead>
     		<th>Nombre</th>
     		<th>Asunto</th>
     		<th>Email</th>
     	</thead>
     	<tbody>
		@foreach( $contacts as $form )
            <tr>
            	{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => [ "contactform.destroy", $form->id ] )) !!}
                        <td>{{ $form->name }}</td>
                        <td>{!! link_to_route('contactform.show', $form->subject, $form->id) !!}</td>
                        <td><a href="mailto:{{ $form->email }}">{{$form->email}}</a></td>
                        <td>{!! Form::submit('Borrar', array('class' => 'btn red')) !!}
                        
                        
                {!! Form::close() !!}
            </tr>	
        @endforeach
     	</tbody>
        
    </table>
 @endif
@endsection