{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Recruitment</h1>
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
			<h3>Candidates</h3>
		</div>
		<div class="box-add">
			<a href="{{ route('candidates.create') }}">add <i class="fa fa-plus"></i></a>
		</div>
		<div class="box-table">
			@if(count($candidates) > 0)
			<div class="row no-gutters">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<td>id</td>
								<td>position applied</td>
								<td>first name</td>
								<td>last name</td>
								<td>email</td>
								<td>country</td>
								<td>actions</td>
							</tr>
						</thead>
						<tbody>
							@foreach($candidates as $candidate)
							<tr>
								<td>{{$candidate->id}}</td>
								<td>{{$candidate->position_applied}}</td>
								<td>{{$candidate->first_name}}</td>
								<td>{{$candidate->last_name}}</td>
								<td>{{$candidate->email}}</td>
								<td>{{$candidate->country}}</td>
								<td>
									<a href="{{ route('candidates.edit', $candidate->id) }}"><i class="fa fa-edit"></i></a>
									<form action="{{ route('candidates.destroy', $candidate->id )}}" method="post">
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
			<h5>No Data Available.</h5>
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