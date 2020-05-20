{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'HRIS | Qualifications Setup - Certifications')
@section('content_header')
@stop
@section('content')
<div class="row no-gutters">
	<div class="col-12 offset-md-3 col-md-6 form-title">
		<h3>add certification</h3>
	</div>
	<div class="col-12 offset-md-3 col-md-6 box">
		<div class="form-box">
			<form class="form-horizontal" method="post" action="/pages/admin/qualifications/certifications">
				@csrf
				<div class="form-group">
					<label for="name">Name: <span>*</span></label>
					<input class="form-control" type="text" name="name" required>
				</div>
				<div class="form-group">
					<label for="description">Description: <span>*</span></label>
					<textarea class="form-control" name="description" required></textarea>
				</div>
				<a href="/pages/admin/qualifications/certifications/index">Back</a>
				<button type="submit">submit</button>
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
$(document).ready(function() {
    $('.select2').select2();
});
</script>
@stop