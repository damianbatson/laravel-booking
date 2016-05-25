@extends('layout')

@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/events') }}">Events</a></li>
			<li class="active">{{ $event->title }}</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<h2>{{ $event->title }} <small>booked by {{ $event->name }}</small></h2>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		
		<p>Time: <br>
		{{ date("g:ia\, jS M Y", strtotime($event->start_time)) . ' until ' . date("g:ia\, jS M Y", strtotime($event->end_time)) }}
		</p>
		
		
		
		<p>
			<form action="{{ url('events/' . $event->id) }}" style="display:inline;" method="POST">
				<input type="hidden" name="_method" value="DELETE" />
				<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
				<button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
			</form>
			<a class="btn btn-primary" href="{{ url('events/' . $event->id . '/edit')}}">
				<span class="glyphicon glyphicon-edit"></span> Edit</a> 
			
		</p>
		
	</div>
</div>
@endsection

@section('js')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.19/daterangepicker.min.js"></script> -->
<script type="text/javascript">
$(function () {
	$('input[name="time"]').daterangepicker({
		"timePicker": true,
		"timePicker24Hour": true,
		"timePickerIncrement": 15,
		"enabledHours": [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22],
		"autoApply": true,
		"locale": {
			"format": "DD/MM/YYYY HH:mm:ss",
			"separator": " - ",
		}
	});
});
</script>
@endsection