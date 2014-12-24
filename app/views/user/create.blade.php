@extends('layout.default')


@section('content')

	<div class="row">

		<div class="col-xs-12">

		<h1>Create new user</h1>

			{{ Form::open(array('route'=>'user.store')) }}

				<div class="form-group">
					{{ Form::label('username', 'Username:') }}
					{{ Form::text('username', null, ['class'=>'form-control']) }}
					{{ $errors->first('username', '<p class="error">:message</p>') }}
				</div>

				<div class="form-group">
					{{ Form::label('email', 'Email:') }}
					{{ Form::email('email', null, ['class'=>'form-control']) }}
					{{ $errors->first('email', '<p class="error">:message</p>') }}
				</div>

				<div class="form-group">
					{{ Form::label('password', 'Password:') }}
					{{ Form::password('password', ['class'=>'form-control']) }}
					{{ $errors->first('password', '<p class="error">:message</p>') }}
				</div>

				<p>{{ Form::submit('Save', ['class'=>'btn btn-default']) }} {{ link_to_route('user.index', 'Cancel')}}</p>


			{{ Form::close() }}

		</div>

	</div>

@stop