@extends('adminlte::page')

@section('title', 'Vaccine Users New')

@section('content_header')
<div class="d-flex justify-content-between">
	<h1>Users</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
			<li class="breadcrumb-item active" aria-current="page">Create New User</li>
		</ol>
	</nav>
</div>
@stop

@section('content')
<div class="row">
	<div class="card w-100">
		<div class="card-header bg-white text-dark">
			<h5>NEW USER</h5>
		</div>
		<div class="card-body">
			<div class="col-xs-12">
				<form method="POST" action="{{ route('users.store') }}">
				@csrf
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="email">Email</label>
							<input type="email" 
								class="form-control  @error('email') is-invalid @enderror" 
								name="email" 
								id="email" 
								placeholder="jdcruz@gmail.com"
								value="{{ old('email') }}"
							>
							@include('errors.input_error', ['name' => 'email'])
						</div>
						<div class="form-group col-md-4">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
							@include('errors.input_error', ['name' => 'password'])
						</div>
						<div class="form-group col-md-4">
							<label for="password_confirmation">Confirm Password</label>
							<input type="password" 
							name="password_confirmation" 
							class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm Password">
							@include('errors.input_error', ['name' => 'password_confirmation'])
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="first_name">First Name</label>
							<input type="text" 
								name="first_name" 
								class="form-control @error('first_name') is-invalid @enderror" 
								id="first_name" placeholder="Juan" 
								value="{{ old('first_name') }}"
							>
							@include('errors.input_error', ['name' => 'first_name'])
						</div>
						<div class="form-group col-md-3">
							<label for="middleName">Middle Name</label>
							<input type="text" name="middle_name" class="form-control" id="middleName" placeholder="Serrano" value="{{ old('middle_name') }}">
						</div>
						<div class="form-group col-md-4">
							<label for="lastName">Last Name</label>
							<input type="text"  name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="lastName" placeholder="Dela Cruz" value="{{ old('last_name') }}">
							@include('errors.input_error', ['name' => 'last_name'])
						</div>
						<div class="form-group col-md-1">
							<label for="nameExtension">Extension</label>
							<input type="text" name="name_ext" class="form-control" class="form-control" id="nameExtension" placeholder="Jr." value="{{ old('name_ext') }}">
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
