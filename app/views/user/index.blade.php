@extends('layout.default')

@section('title') Users @stop

@section('content')

	<h1>Users List</h1>
	
	@if($users->count() > 0)

		<table border="1">

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

@stop