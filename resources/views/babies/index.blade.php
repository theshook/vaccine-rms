@extends('adminlte::page')

@section('title', 'Vaccine Babies')

@section('content_header')
<div class="d-flex justify-content-between">
	<h1>Babies</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Babies</li>
		</ol>
	</nav>
</div>
@stop

@section('content')
<div class="row">
	<div class="card w-100">
		<div class="card-header bg-white text-dark">
			<h5>BABY LISTS 
				<a href="{{ route('babies.create') }}" class="btn btn-primary btn-sm float-right ml-3">
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
						<th scope="col">#</th>
						<th scope="col">NHTS</th>
						<th scope="col">Name</th>
						<th scope="col">Gender</th>
						<th scope="col">Mother</th>
						<th scope="col">Address</th>
						<th scope="col">Screen Date</th>
						<th scope="col">Created At</th>
						<th scope="col">Updated At</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($babies as $baby)
							<tr>
								<td>
									<div class="row">
										<a href="{{ route('users.edit', $baby->id) }}" class="btn btn-info btn-sm">
											<i class="fas fa-pen"></i>
										</a>
										&nbsp;
										{{ $baby->baby_family_serial_number }}
									</div>
								</td>
								<td>{{ $baby->baby_nhts }}</td>
								<td>
									{{ $baby->baby_first_name.' '.$baby->baby_middle_name.' '. $baby->baby_last_name.' '.$baby->baby_name_ext }}
								</td>
								<td>{{ $baby->baby_sex }}</td>
								<td>
									{{ $baby->baby_mother_first.' '. $baby->baby_mother_middle.' '.$baby->baby_mother_last }}
								</td>
								<td>{{ $baby->baby_street.', '.$baby->baby_barangay }}</td>
								<td>{{ $baby->baby_date_screening }}</td>
								<td>{{ $baby->created_at }}</td>
								<td>{{ $baby->updated_at }}</td>
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
    </script>
@stop
