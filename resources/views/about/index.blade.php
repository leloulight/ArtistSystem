@extends('app')

@section('content')

<h2>Nosotros</h2>

@if( !$about->count() )
	No tienes descripciones. 
@else
	<h6 class = "right btn green new">
        {!! link_to_route('about.create', 'Descripción nueva', array('class' => 'btn')) !!}
    </h6>
     <table class = "bordered">
     	<thead>
     		<th>Título</th>
     		<th>Descripción</th>
     	</thead>
     	<tbody>
		@foreach( $about as $about )
            <tr>
            	{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('about.destroy', $about->id  ) )) !!}
                        <td>{!! link_to_route('about.show', $about->header, array($about->id)) !!}</td>
                        <td>{{$about->paragraph}}</td>
                        <td>{!! link_to_route('about.edit', 'Editar', array($about->id), array('class' => 'btn')) !!}</td>
                        <td>{!! Form::submit('Borrar', array('class' => 'btn red')) !!}
                        
                {!! Form::close() !!}
                

            </tr>	
        @endforeach
     	</tbody>
        
    </table>
 @endif

@endsection