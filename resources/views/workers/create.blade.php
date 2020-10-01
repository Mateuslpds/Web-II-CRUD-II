@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Post new offer</h2>
		</div>
	</div>
</div>

<form action="{{ route('workers.store') }}" method="POST">
	@csrf

	<div class="row">
		<dir class="col">
			<div class="form-group">
				<strong>Name:</strong>
				<input type="text" name="name" class="form-control">
			</div>
		</dir>
	</div>

	<div class="row">
		<dir class="col">
			<div class="form-group">
				<strong>CPF</strong>
				<input type="number" name="cpf" class="form-control" min="0">
			</div>
		</dir>
	</div>

	<div class="row">
		<div class="col">
			<div class="form-group">
				<strong>Salary:</strong>
				<input type="number" name="salary" class="form-control" step="0.01" min="0">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col text-center">
			<button type="submmit" class="btn col btn-primary">POST</button>
		</div>
	</div>
</form>

@endsection