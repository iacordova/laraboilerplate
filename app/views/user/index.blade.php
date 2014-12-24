@extends('layout.default')

@section('title') Users @stop

@section('content')

	<div class="row">

		<div class="col-xs-12">

			<h1>Users List</h1>
			
			<p>{{ link_to('user/create', 'Create new user') }}</p>

			@if($users->count() > 0)

				<table class="table table-bordered table-hover">

					<thead>
						<tr>
							<th>Username</th>
							<th>Email</th>
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

				<p>There is no users</p>

			@endif

		</div>

	</div>

@stop