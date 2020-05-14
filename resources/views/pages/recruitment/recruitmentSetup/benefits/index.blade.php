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
			<h3>Benefits</h3>
		</div>
		<div class="box-add">
			<a href="{{ route('benefits.create') }}">add <i class="fa fa-plus"></i></a>
		</div>
		<div class="box-table">
			@if ( count($benefits) > 0)
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
							@foreach($benefits as $benefit)
							<tr>
								<td>{{$benefit->id}}</td>
								<td>{{$benefit->name}}</td>
								<td>
									<a href="{{ route('benefits.edit', $benefit->id) }}"><i class="fa fa-edit"></i></a>
									<form action="{{ route('benefits.destroy', $benefit->id )}}" method="post">
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
