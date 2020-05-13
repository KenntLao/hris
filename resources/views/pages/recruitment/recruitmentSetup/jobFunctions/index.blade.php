{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1><a href="{{ route('recruitmentSetup.index') }}">Recruitment Setup</a></h1>
@stop
@section('content')
<div class="row no-gutters">
	@if (session()->get('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
	@endif
	<div class="col-12 box">
		<div class="box-title">
			<h3>Job Functions</h3>
		</div>
		<div class="box-add">
			<a href="{{ route('jobFunctions.create') }}">add <i class="fa fa-plus"></i></a>
		</div>
		<div class="box-table">
			@if ( count($jobFunctions) > 0)
			<div class="row no-gutters">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<td>id</td>
								<td>name</td>
								<td>action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($jobFunctions as $jobFunction)
							<tr>
								<td>{{$jobFunction->id}}</td>
								<td>{{$jobFunction->name}}</td>
								<td>
									<a href="{{ route('jobFunctions.edit', $jobFunction->id) }}"><i class="fa fa-edit"></i></a>
									<form action="{{ route('jobFunctions.destroy', $jobFunction->id )}}" method="post">
										@csrf
										@method('DELETE')
										<button type="submit"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			@else
			<h5>No data available.</h5>
			@endif
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
