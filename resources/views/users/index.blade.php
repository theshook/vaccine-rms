@extends('adminlte::page')

@section('title', 'Vaccine Users')

@section('content_header')
<div class="d-flex justify-content-between">
	<h1>Users</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Users</li>
		</ol>
	</nav>
</div>
@stop

@section('content')
<div class="row">
	<div class="card w-100">
		<div class="card-header bg-white text-dark">
			<h5>USERS LIST 
				<a href="{{ route('users.trashed') }}" class="btn btn-danger btn-sm float-right ml-3">
					<i class="fas fa-dumpster"></i> Trashed
					<span class="badge badge-pill badge-light">{{ $trashed }}</span>
				</a>
				<a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right ml-3">
					<i class="fas fa-plus-square"></i> New
				</a>
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
						<th scope="col">Created At</th>
						<th scope="col">Updated At</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td>
									<div class="row">
										<a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">
											<i class="fas fa-pen"></i>
										</a>
										&nbsp;
										<form action="{{ route('users.destroy', $user->id) }}" method="POST" id="userDelete">
											@csrf
											@method('DELETE')
											<button type="button" id="btn-submit" class="btn btn-danger btn-sm" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></button>
										</form>
										&nbsp;
										{{ $user->email }}
									</div>
								</td>
								<td>{{ $user->last_name }}</td>
								<td>{{ $user->first_name }}</td>
								<td>{{ $user->middle_name }}</td>
								<td>{{ $user->created_at }}</td>
								<td>{{ $user->updated_at }}</td>
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
			var form = $('#userDelete');
			Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.value) {
					form.submit();
				}
			});
		}
    </script>
@stop
