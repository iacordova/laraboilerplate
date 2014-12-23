@extends('layout.default')

@section('content')

	<div class="row">

		<div class="col-xs-4 col-xs-offset-4">

			<h1>Login</h1>

			{{ Form::open(array('route'=>'session.store')) }}

			<p>
				{{ Form::label('username','Username:') }}
				{{ Form::text('username', null, ['class'=>'form-control']) }}
			</p>
			<p>
				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class'=>'form-control']) }}
			</p>	
			<p>
				{{ Form::submit('Submit', ['class'=>'btn btn-default']) }}
			</p>

			{{ Form::close() }}

		</div>

	</div>

@stop