@extends('adminlte::page')

@section('title', 'Vaccine Babies')

@section('content_header')
<div class="d-flex justify-content-between">
	<h1>Calendar</h1>
	{{-- <nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Babies</li>
		</ol>
	</nav> --}}
</div>
@stop

@section('content')
<div class="row">
	<div class="col-md-9">
		<div class="card card-primary">
			<div class="card-body p-1">
				<div id='calendar'></div>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
	<script>
		document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
			defaultView: 'dayGridMonth',
			header: {
			left: 'prev,next today',
			center: 'title',
			right: 'dayGridMonth,timeGridWeek,timeGridDay'
			},
			events: {url: '{!! route("api.schedules") !!}'}
		});
		calendar.render();
		});
	  </script>
@stop
