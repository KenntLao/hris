{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1><a href="{{ route('recruitmentSetup.index') }}">Recruitment Setup</a></h1>
@stop
@section('content')
<div class="row no-gutters">
	<div class="col-12 box">
		<a href="{{ route('educationLevels.index') }}">Back</a>
		<div class="form-box">
			<form class="form-horizontal" method="post" action="{{ route('educationLevels.update', $educationLevel->id) }}">
				@csrf
				@method('PATCH')
				<div class="form-group">
					<label for="name">Name:</label>
					<input class="form-control" type="text" name="name" value="{{ $educationLevel->name }}" required>
				</div>
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
console.log('Hi!');
</script>
@stop
