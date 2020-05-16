{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'HRIS | Recruitment Setup - Experience Levels')
@section('content_header')
@stop
@section('content')
<div class="row no-gutters">
	<div class="col-12 offset-md-4 col-md-4 box">
		<h3>add experience level</h3>
		<a href="/pages/recruitment/recruitmentSetup/experienceLevels/index">Back</a>
		<div class="form-box">
			<form class="form-horizontal" method="post" action="/pages/recruitment/recruitmentSetup/experienceLevels">
				@csrf
				<div class="form-group">
					<label for="name">Name:</label>
					<input class="form-control" type="text" name="name" required>
				</div>
				<div class="row no-gutters">
					<div class="col-6">
						<button type="submit">submit</button>
					</div>
					<div class="col-6">
						<a href="/pages/recruitment/recruitmentSetup/experienceLevels/index">Back</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="{{ URL::asset('assets/css/admin_custom.css') }}">
@stop
@section('js')
<script>
console.log('Hi!');
</script>
@stop
