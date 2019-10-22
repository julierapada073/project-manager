@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
				</tr>
			<tbody>
				@foreach($teams as $team)
					<tr>
						<td>{{ $team->id }}</td>
						<td>{{ $team->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/teams/add'>Add New Team</a>
	</br>
@endsection