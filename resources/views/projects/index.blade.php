@extends('layouts.master')
@section('navbar')
	<thead>
		<ul>
	  		<li><a class="active" href="/logout">Logout</a></li>
		</ul>
	</thead>
@endsection
@section('content')
	<div class="container">
		<table class="table">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Title</th>
					<th scope="col">Description</th>
					<th scope="col">Due Date</th>
					<th scope="col">Actions</th>
				</tr>
			<tbody>
				@foreach($projects as $project)
					<tr>
						<td>{{ $project->id }}</td>
						<td>{{ $project->title }}</td>
						<td>{{ $project->description }}</td>
						<td>{{ \Carbon\Carbon::parse($project->due_date)->toFormattedDateString() }}</td>
						<td><a href="/projects/{{ $project->id }}">View</a></td>
						<td><a href="/projects/{{ $project->id }}/edit">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/projects/add'>Add New Project</a>
	</br>
@endsection