@extends('app')



@section('content')

<h2>Arte</h2>
@if ( !$art->count() )
    No tienes obras de arte.
@else

	<h6 class = "right btn green new">
        {!! link_to_route('art.create', 'Obra nueva', array('class' => 'btn')) !!}
    </h6>
     <table class = "bordered">
     	<thead>
     		<th>Nombre</th>
     		<th>Tamaño</th>
     		<th>Activo</th>
     	</thead>
     	<tbody>
		@foreach( $art as $art )
            <tr>
            	{!! Form::open(array('class' => 'form-inline', 'method' => 'POST', 'url' => array('art/activate', $art->id  ) )) !!}
                        <td>{!! link_to_route('art.show', $art->name, array($art->id)) !!}</td>
                        <td>{{$art->width}} x {{$art->height}}</td>
                        <td>
                            @if($art->active)
                                Activo
                            @else
                                Inactivo
                            @endif

                        </td>
                        @if($art->active === 1)
                        	<td>{!! Form::submit('Desactivar', array('class' => 'btn orange')) !!}
                        @else
                        	<td>{!! Form::submit('Activar', array('class' => 'btn green')) !!}
                        @endif
                        
                {!! Form::close() !!}
                {!! link_to_route('art.edit', 'Editar', array($art->id), array('class' => 'btn')) !!}</td>

            </tr>	
        @endforeach
     	</tbody>
        
    </table>
 @endif
@endsection