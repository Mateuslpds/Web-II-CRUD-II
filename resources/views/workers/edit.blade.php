@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col">
		<div class="pull-left">
			<h2>Edit offer</h2>
		</div>
	</div>
</div>

<form action="{{ route('workers.update', $worker->id) }}" method="POST">
	@csrf
	@method('PUT')

	<div class="row">
		<div class="col">
			<div class="form-group">
				<strong>Name:</strong>
				<input type="text" name="name" class="form-control" value="{{ $worker->name }}">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="form-group">
				<strong>CPF:</strong>
				<input type="number" name="cpf" class="form-control" min="0">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="form-group">
				<strong>Salary:</strong>
				<input type="number" name="salary" class="form-control" step="0.01" min="0">
			</div>
		</div>
	</div>

	<div class="col text-center">
		<button type="submit" class="btn btn-primary col">Update</button>
	</div>

</form>

@endsection