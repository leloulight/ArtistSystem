@extends('app')



@section('content')

<h2>Contactos</h2>
@if ( !$contact->count() )
    No tienes obras de contacte.
@else

	<h6 class = "right btn green new">
        {!! link_to_route('contact.create', 'Nuevo Correo', array('class' => 'btn')) !!}
    </h6>
     <table class = "bordered">
     	<thead>
     		<th>Email</th>
     		<th>Activo</th>
     	</thead>
     	<tbody>
		@foreach( $contact as $contact )
            <tr>
            	{!! Form::open(array('class' => 'form-inline', 'method' => 'POST', 'url' => array('contact/activate', $contact->id  ) )) !!}
                        <td>{{$contact->email}}</td>
                        <td>
                            @if($contact->active)
                                Activo
                            @else
                                Inactivo
                            @endif

                        </td>
                        @if($contact->active === 1)
                        	<td>{!! Form::submit('Desactivar', array('class' => 'btn orange')) !!}
                        @else
                        	<td>{!! Form::submit('Activar', array('class' => 'btn green')) !!}
                        @endif
                        
                {!! Form::close() !!}
                {!! link_to_route('contact.edit', 'Editar', array($contact->id), array('class' => 'btn')) !!}</td>

            </tr>	
        @endforeach
     	</tbody>
        
    </table>
 @endif
@endsection