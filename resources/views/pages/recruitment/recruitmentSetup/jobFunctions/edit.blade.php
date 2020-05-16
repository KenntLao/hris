{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'HRIS | Recruitment Setup - Job Functions')
@section('content_header')
@stop
@section('content')
<div class="row no-gutters">
	<div class="col-12 offset-md-4 col-md-4 box">
		<h3>edit job function</h3>
		<a href="/pages/recruitment/recruitmentSetup/jobFunctions/index">Back</a>
		<div class="form-box">
			<form class="form-horizontal" method="post" action="/pages/recruitment/recruitmentSetup/jobFunctions/update/{{$jobFunction->id}}">
				@csrf
				@method('PATCH')
				<div class="form-group">
					<label for="name">Name:</label>
					<input class="form-control" type="text" name="name" value="{{ $jobFunction->name }}" required>
				</div>
				<div class="row no-gutters">
					<div class="col-6">
						<button type="submit">submit</button>
					</div>
					<div class="col-6">
						<a href="/pages/recruitment/recruitmentSetup/jobFunctions/index">Back</a>
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
