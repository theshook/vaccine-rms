@extends('adminlte::page')

@section('title', 'Vaccine Babies New')

@section('content_header')
<div class="d-flex justify-content-between">
	<h1>Babies</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('babies.index') }}">Babies</a></li>
			<li class="breadcrumb-item active" aria-current="page">Baby Information</li>
		</ol>
	</nav>
</div>
@stop

@section('content')
<div class="row">
	<div class="card w-100">
		<div class="card-header bg-white text-dark">
			<h5>Baby Information</h5>
			All the fields that has <span class="text-danger"><strong>*</strong></span> must be filled with values.
		</div>
		<div class="card-body">
			<div class="col-xs-12">
				<form method="POST" action="{{ route('babies.store') }}">
				@csrf
					<section class="form-row">
						<div class="form-group col-md-4">
							<label for="baby_family_serial_number">
								Family Number
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<input type="text" 
								class="form-control  @error('baby_family_serial_number') is-invalid @enderror" 
								name="baby_family_serial_number" 
								id="baby_family_serial_number" 
								placeholder="123456789"
								value="{{ old('baby_family_serial_number') }}"
							>
							@include('errors.input_error', ['name' => 'baby_family_serial_number'])
						</div>
						<div class="form-group col-md-4">
							<label for="dob">
								Date of Birth
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<input type="date" 
								class="form-control  @error('dob') is-invalid @enderror" 
								name="dob" 
								id="dob" 
								value="{{ old('dob') }}"
							>
							@include('errors.input_error', ['name' => 'dob'])
						</div>
						<div class="form-group col-md-4">
							<label for="nhts">
								NHTS
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<input type="text" 
								class="form-control  @error('nhts') is-invalid @enderror" 
								name="nhts" 
								id="nhts" 
								value="{{ old('nhts') }}"
							>
							@include('errors.input_error', ['name' => 'nhts'])
						</div>
					</section>
					<section class="form-row">
						<div class="form-group col-md-4">
							<label for="first_name">
								First Name
								<span class="text-danger"><strong>*</strong></span>
							</label>
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
							<label for="lastName">
								Last Name
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<input type="text"  name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="lastName" placeholder="Dela Cruz" value="{{ old('last_name') }}">
							@include('errors.input_error', ['name' => 'last_name'])
						</div>
						<div class="form-group col-md-1">
							<label for="nameExtension">Extension</label>
							<input type="text" name="name_ext" class="form-control" class="form-control" id="nameExtension" placeholder="Jr." value="{{ old('name_ext') }}">
						</div>
					</section>
					<section class="form-row">
						<div class="form-group col-md-1">
							<label for="gender">
								Gender
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M" checked>
								<label class="form-check-label" for="inlineRadio1">Male</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
								<label class="form-check-label" for="inlineRadio2">Female</label>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="first_name">
								Mother First Name
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<input type="text" 
								name="mother_first_name" 
								class="form-control @error('mother_first_name') is-invalid @enderror" 
								id="first_name" placeholder="Juanita" 
								value="{{ old('mother_first_name') }}"
							>
							@include('errors.input_error', ['name' => 'mother_first_name'])
						</div>
						<div class="form-group col-md-3">
							<label for="middleName">Mother Middle Name</label>
							<input type="text" name="mother_middle_name" class="form-control" id="middleName" placeholder="Serrano" value="{{ old('mother_middle_name') }}">
						</div>
						<div class="form-group col-md-4">
							<label for="lastName">
								Mother Last Name
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<input type="text"  name="mother_last_name" class="form-control @error('mother_last_name') is-invalid @enderror" id="lastName" placeholder="Dela Cruz" value="{{ old('mother_last_name') }}">
							@include('errors.input_error', ['name' => 'mother_last_name'])
						</div>
					</section>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="street">
								Street
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<input type="text"  name="street" class="form-control @error('street') is-invalid @enderror" id="street" placeholder="Mc Arthur Highway" value="{{ old('street') }}">
							@include('errors.input_error', ['name' => 'street'])
						</div>
						<div class="form-group col-md-2">
							<label for="municipality">
								Municipality
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<select class="js-example-basic-single form-control @error('municipality') is-invalid @enderror" id="municipality" name="municipality">
								<option value="">Select Municipality</option>
								@foreach ($municipalities as $municipality)
									<option value="{{ $municipality->id }}" 
										{{ (old('municipality') == $municipality->id) ? 'selected' : '' }}
									>
										{{ $municipality->mun_title }}
									</option>
								@endforeach
							</select>
							@include('errors.input_error', ['name' => 'municipality'])
						</div>
						<div class="form-group col-md-2">
							<label for="barangay">
								Barangay
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<select class="js-example-basic-single form-control @error('barangay') is-invalid @enderror" id="barangay" name="barangay">
								<option value="">Select Barangay</option>
							</select>
							@include('errors.input_error', ['name' => 'barangay'])
						</div>
						<div class="form-group col-md-2">
							<label for="zipCode">
								Zip Code
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<input type="number"  name="zipCode" class="form-control @error('zipCode') is-invalid @enderror" id="zipCode" placeholder="2423" value="{{ old('zipCode') }}">
							@include('errors.input_error', ['name' => 'zipCode'])
						</div>
						<div class="form-group col-md-4">
							<label for="dateScreening">
								Date Screening
								<span class="text-danger"><strong>*</strong></span>
							</label>
							<input type="date"  name="dateScreening" class="form-control @error('dateScreening') is-invalid @enderror" id="dateScreening" placeholder="2423" value="{{ old('dateScreening') }}">
							@include('errors.input_error', ['name' => 'dateScreening'])
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
	<script>
		$(document).ready(function() {
			$('.js-example-basic-single').select2();

			// Municipal Id
			var id = $('#municipality').val();
			console.log(id);
			// Empty the dropdown
			$('#barangay').find('option').not(':first').remove();
			// AJAX Request
			$.ajax({
				url: '/api/barangays/'+id,
				type: 'get',
				dataType: 'json',
				success: function(response) {
					var len = 0;
					if(response != null){
						len = response.length;
					}
					if(len > 0){
						// Read data and create <option >
						for(var i=0; i<len; i++){
							var id = response[i].id;
							var title = response[i].bar_title;
							var option = "<option value='"+id+"'>"+title+"</option>"; 
							$("#barangay").append(option); 
						}
					}
				}
			});

			$('#municipality').change(function() {
				// Municipal Id
				var id = $(this).val();
				// Empty the dropdown
				$('#barangay').find('option').not(':first').remove();
				// AJAX Request
				$.ajax({
					url: '/api/barangays/'+id,
					type: 'get',
					dataType: 'json',
					success: function(response) {
						var len = 0;
						if(response != null){
							len = response.length;
						}
						if(len > 0){
							// Read data and create <option >
							for(var i=0; i<len; i++){
								var id = response[i].id;
								var title = response[i].bar_title;
								var option = "<option value='"+id+"'>"+title+"</option>"; 
								$("#barangay").append(option); 
							}
						}
					}
				});
			});
		});
	</script>
@stop
