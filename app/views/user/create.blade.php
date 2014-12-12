@extends('layout.default')


@section('content')

	<h1>Create new user</h1>

	{{ Form::open(array('route'=>'user.store')) }}

		<p>
			{{ Form::label('username', 'Username:') }}
			{{ Form::text('username') }}
			{{ $errors->first('username') }}
		</p>

		<p>
			{{ Form::label('email', 'Email:') }}
			{{ Form::email('email') }}
			{{ $errors->first('email') }}
		</p>

		<p>
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password') }}
			{{ $errors->first('password') }}
		</p>

		<p>{{ Form::submit('Save') }}</p>


	{{ Form::close() }}

@stop