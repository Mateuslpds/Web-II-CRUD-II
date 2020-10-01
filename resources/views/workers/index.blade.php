@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col">
		<div class="pull left">
			<h2>Offers currently available</h2>
		</div>
	</div>
</div>

<table class="table table-bordered">
	<tr>
		<th>Name</th>
		<th>CPF</th>
		<th>User</th>
		<th width="280px">Action</th>
	</tr>
	@foreach ($workers as $worker)
	<tr>
		<td>{{ $worker->name }}</td>
		<td>{{ $worker->cpf }}</td>
		<td>{{ $worker->user->name }}</td>

		<td>
			<form action="{{ route('workers.destroy', $worker->id) }}" method="POST">
				<a class="btn btn-primary" href="{{ route('workers.show', $worker->id) }}">Show</a>
				<a class="btn btn-info" href="{{ route('workers.edit', $worker->id) }}">Edit</a>
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>

{{ $workers->links() }}

@endsection