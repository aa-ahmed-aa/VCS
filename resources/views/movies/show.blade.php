@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:100px;">
		<h1>Title</h1>
		<p style="padding-left:50px;">
			{{$movie->title}}
		</p>
		<h1>Rate</h1>
		<p style="padding-left:50px;">
			{{$movie->rate}}
		</p>
		<h1>Duration</h1>
		<p style="padding-left:50px;">
			{{$movie->duration}}
		</p>
		<h1>Main Actor</h1>
		<p style="padding-left:50px;">
			{{$movie->main_actor}}
		</p>

		<h1>Director</h1>
		<p style="padding-left:50px;">
			{{$movie->director}}
		</p>


	{!! Form::open(array('route'=>array('movies.destroy', 'id'=>$movie->id), 'method'=>'DELETE')) !!}
    {!! Form::token() !!}
    {!! Form::submit('Delete This Movie',array('class'=>'btn btn-danger')) !!}
    {!! Form::close() !!}

</div>
@endsection