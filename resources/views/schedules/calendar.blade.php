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
	<div class="col-md-8">
		<div class="card card-primary">
			<div class="card-body p-1">
				<div id='calendar'></div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card  callout callout-info p-0">
			<div class="card-header text-center"><strong>Schedules for Today</strong></div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
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
				displayEventTime: false,				
				height: 405,
				contentHeight: 405,
				windowResize: function(view) {
					if ($(window).width() < 514){
						$('.fc-right').hide();
						$('.fc-left').hide();
					} else {
						$('.fc-right').show();
						$('.fc-left').show();
					}
				},
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'dayGridMonth,dayGridWeek,dayGridDay'
				},
				weekends: false,
				businessHours: {
					// days of week. an array of zero-based day of week integers (0=Sunday)
					daysOfWeek: [ 1, 2, 3, 4, 5], // Monday - Friday

					startTime: '08:00', // a start time (8am in this example)
					endTime: '17:00', // an end time (5pm in this example)
				},
				events: {url: '{!! route("api.schedules") !!}'}
			});
			calendar.render();
		});
	  </script>
@stop
