{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'HRIS | Recruitment Setup - Education Levels')
@section('content_header')
@stop
@section('content')
<div class="row no-gutters">
	@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">
	    <button type="button" class="close" data-dismiss="alert">×</button>
	    <p><i class="fas fa-fw fa-check-circle"></i>{{ $message }}</p>
	</div>
	@endif
	<h1>Recruitment Setup</h1>
	<div class="col-12 box">
		<div class="box-title">
			<h3>Education Levels</h3>
		</div>
		<div class="box-add">
			<a href="/pages/recruitment/recruitmentSetup/educationLevels/create">add <i class="fa fa-plus"></i></a>
		</div>
		<div class="box-table">
			@if ( count($educationLevels) > 0)
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
							@foreach($educationLevels as $educationLevel)
							<tr>
								<td>{{$educationLevel->id}}</td>
								<td>{{$educationLevel->name}}</td>
								<td>
									<a href="/pages/recruitment/recruitmentSetup/educationLevels/{{$educationLevel->id}}/edit"><i class="fa fa-edit"></i></a>
									<form action="/pages/recruitment/recruitmentSetup/educationLevels/delete/{{$educationLevel->id}}" method="post">
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
			<div class="links">
				{{$educationLevel->links}}
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
