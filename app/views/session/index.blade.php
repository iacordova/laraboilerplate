@extends('layout.default')

@section('content')

	<h1>Login</h1>

	{{ Form::open(array('route'=>'session.store')) }}

	<p>
		{{ Form::label('username','Username:') }}
		{{ Form::text('username') }}
	</p>
	<p>
		{{ Form::label('password', 'Password:') }}
		{{ Form::password('password') }}
	</p>	
	<p>
		{{ Form::submit('Submit') }}
	</p>

	{{ Form::close() }}

@stop