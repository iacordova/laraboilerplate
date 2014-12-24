@extends('layout.default')

@section('title') {{ Lang::get('user.title') }} @stop

@section('content')

	<div class="row">

		<div class="col-xs-12">

			<h1>{{ Lang::get('user.users_list') }}</h1>
			
			<p>{{ link_to_route('user.create', Lang::get('user.create_new')) }}</p>

			@if($users->count() > 0)

				<table class="table table-bordered table-hover">

					<thead>
						<tr>
							<th>{{ Lang::get('user.username') }}</th>
							<th>{{ Lang::get('user.email') }}</th>
						</tr>
					</thead>

					<tbody>

					@foreach($users AS $user)

						<tr>
							<td>{{ link_to("user/{$user->id}", $user->username) }}</td>
							<td>{{ $user->email }}</td>
						</tr>

					@endforeach

					</tbody>

				</table>

			@else

				<p>{{ Lang::get('empty_users') }}</p>

			@endif

		</div>

	</div>

@stop