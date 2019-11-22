@extends('adminlte::page')

@section('title', 'Vaccine Users Trashed')

@section('content_header')
<div class="d-flex justify-content-between">
	<h1>Trashed Records</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
			<li class="breadcrumb-item active" aria-current="page">Trashed Records</li>
		</ol>
	</nav>
</div>
@stop

@section('content')
<div class="row">
	<div class="card w-100">
		<div class="card-header bg-white text-dark">
			<h5>USERS TRASHED LIST 
				<span class="float-right">
					<div id="utils">
					</div>
				</span>
			</h5>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="myExTable" class="table table-bordered table-hover">
					<thead>
						<tr>
						<th scope="col">Email</th>
						<th scope="col">Last Name</th>
						<th scope="col">First Name</th>
						<th scope="col">Middle Name</th>
						<th scope="col">Deleted At</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($trashed as $user)
							<tr>
								<td>
									<div class="row">
										<form action="{{ route('users.restore', $user->id) }}" method="POST" id="userRestore">
											@csrf
											<button type="button" id="btn-submit" class="btn btn-info btn-sm" onclick="deleteUser()"><i class="fas fa-trash-restore"></i></button>
										</form>
										&nbsp;
										{{ $user->email }}
									</div>
								</td>
								<td>{{ $user->last_name }}</td>
								<td>{{ $user->first_name }}</td>
								<td>{{ $user->middle_name }}</td>
								<td>{{ $user->deleted_at }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
@include('includes.success')
    <script>
        $(document).ready( function () {
            var table = $('#myExTable').DataTable({
                "pageLength": 5,
                "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, 'All']],
                buttons: [
                    {
						extend: 'copyHtml5',
						text: '<i class="fas fa-copy"></i> Copy',
						titleAttr: 'Copy',
						className: ' btn btn-secondary btn-sm'
					},
					{
						extend: 'excelHtml5',
						text: '<i class="fas fa-file-excel"></i> Excel',
						titleAttr: 'Excel',
						className: ' btn btn-secondary btn-sm'
					},
					{
						extend: 'csvHtml5',
						text: '<i class="fas fa-file-csv"></i> CSV',
						titleAttr: 'CSV',
						className: ' btn btn-secondary btn-sm'
					},
					{
						extend: 'pdfHtml5',
						text: '<i class="fas fa-file-pdf"></i> PDF',
						titleAttr: 'PDF',
						className: ' btn btn-secondary btn-sm'
					},
					{
						extend: 'print',
						text: '<i class="fas fa-print"></i> Print',
						titleAttr: 'Print',
						className: ' btn btn-secondary btn-sm'
					}

                ]
            });
			table.buttons().container().appendTo($('#utils'));
		});

		function deleteUser() {
			var form = $('#userRestore');
			Swal.fire({
			title: 'Are you sure?',
			text: "You want to restore this record?",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, restore it!'
			}).then((result) => {
				if (result.value) {
					form.submit();
				}
			});
		}
    </script>
@stop
