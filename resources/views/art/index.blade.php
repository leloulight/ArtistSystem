@extends('app')



@section('content')

<h2>Art</h2>
@if ( !$art->count() )
    You do not have works of arts.
@else

	<h6 class = "right btn green new">
        {!! link_to_route('art.create', 'New Art', array('class' => 'btn')) !!}
    </h6>
     <table class = "bordered">
     	<thead>
     		<th>Name</th>
     		<th>Size</th>
     		<th>Active</th>
     	</thead>
     	<tbody>
		@foreach( $art as $art )
            <tr>
            	{!! Form::open(array('class' => 'form-inline', 'method' => 'POST', 'route' => array('art.index', $art->id,$art->active))) !!}
                        <th>{!! link_to_route('art.show', $art->name, array($art->id)) !!}</th>
                        <th>{{$art->width}} x {{$art->height}}</th>
                        @if($art->active === 1)
                        	<th>{!! Form::submit('Deactivate', array('class' => 'btn orange')) !!}</th>
                        @else
                        	<th>{!! Form::submit('Activate', array('class' => 'btn green')) !!}</th>
                        @endif
                        
                {!! Form::close() !!}
                <th>{!! link_to_route('art.edit', 'Edit', array($art->id), array('class' => 'btn')) !!}</th>

            	
            </tr>	
        @endforeach
     	</tbody>
        
    </table>
 @endif
@endsection