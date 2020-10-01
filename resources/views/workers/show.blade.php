@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col">
		<div class="pull-left">
			<h2>Show offer</h2>
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
			<strong>Name:</strong>
			{{ $worker->name }}
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
			<strong>CPF:</strong>
			{{ $worker->cpf }}
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
			<strong>User:</strong>
			{{ $worker->user->name }}
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
			<strong>Salary:</strong>
			{{ $worker->salary }}
		</div>
	</div>
</div>

@endsection