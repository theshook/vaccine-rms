@extends('adminlte::page')

@section('title', 'Vaccine Users Edit')

@section('content_header')
<div class="d-flex justify-content-between">
	<h1>Users</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
			<li class="breadcrumb-item active" aria-current="page">Create Edit User</li>
		</ol>
	</nav>
</div>
@stop

@section('content')
<div class="row">
	<div class="card w-100">
		<div class="card-header bg-white text-dark">
			<h5>Update User Information: {{ $user->last_name.', '. $user->first_name }}</h5>
		</div>
		<div class="card-body">
			<div class="col-xs-12">
				<form method="POST" action="{{ route('users.update', $user->id) }}">
				@csrf
				@method('PUT')
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="first_name">First Name</label>
							<input type="text" 
								name="first_name" 
								class="form-control @error('first_name') is-invalid @enderror" 
								id="first_name" placeholder="Juan" 
								value="{{ $user->first_name }}"
							>
							@include('errors.input_error', ['name' => 'first_name'])
						</div>
						<div class="form-group col-md-3">
							<label for="middleName">Middle Name</label>
							<input type="text" name="middle_name" class="form-control" id="middleName" placeholder="Serrano" value="{{ $user->middle_name }}">
						</div>
						<div class="form-group col-md-4">
							<label for="lastName">Last Name</label>
							<input type="text"  name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="lastName" placeholder="Dela Cruz" value="{{ $user->last_name }}">
							@include('errors.input_error', ['name' => 'last_name'])
						</div>
						<div class="form-group col-md-1">
							<label for="nameExtension">Extension</label>
							<input type="text" name="name_ext" class="form-control" class="form-control" id="nameExtension" placeholder="Jr." value="{{ $user->name_ext }}">
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
	@include('includes.success')
@stop
