@extends('layout.default')

@section('content')

	<div class="row">

		<div class="col-xs-12">

		<h1>{{ Lang::get('user.create_new') }}</h1>

			{{ Form::open(array('route'=>'user.store')) }}

				<div class="form-group">
					{{ Form::label('username', Lang::get('user.username')) }}
					{{ Form::text('username', null, ['class'=>'form-control']) }}
					{{ $errors->first('username', '<p class="text-danger">:message</p>') }}
				</div>

				<div class="form-group">
					{{ Form::label('email', Lang::get('user.email')) }}
					{{ Form::email('email', null, ['class'=>'form-control']) }}
					{{ $errors->first('email', '<p class="text-danger">:message</p>') }}
				</div>

				<div class="form-group">
					{{ Form::label('password', Lang::get('user.password')) }}
					{{ Form::password('password', ['class'=>'form-control']) }}
					{{ $errors->first('password', '<p class="text-danger">:message</p>') }}
				</div>

				<p>{{ Form::submit(Lang::get('default.save'), ['class'=>'btn btn-default']) }} {{ link_to_route('user.index', Lang::get('default.cancel'))}}</p>


			{{ Form::close() }}

		</div>

	</div>

@stop