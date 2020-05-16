{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')
<div class="row no-gutters">
	<div class="col-12 offset-md-2 col-md-8 box">
		<h3>add candidate</h3>
		<div class="form-box">
			<form class="form-horizontal" method="post" action="/pages/recruitment/candidates" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="position_applied">Position Applied:</label>
					@if (count($jobPositions) > 0)
					<select class="form-control" name="position_applied" required>
						@foreach($jobPositions as $jobPosition)
						<option value="{{$jobPosition->job_title}}">{{$jobPosition->job_title}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control" name="position_applied" required>
						<option value="None">None</option>
					</select>
					@endif
				</div>
				<div class="form-group">
					<label for="hiring_stage">Hiring Stage</label>
					<select class="form-control" name="hiring_stage" required>
						<option value="Sourced">Sourced</option>
						<option value="Hired">Hired</option>
						<option value="Archived">Archived</option>
						<option value="Not Qualified">Not Qualified</option>
						<option value="Offer Rejected">Offer Rejected</option>
						<option value="Offer Accepted">Offer Accepted</option>
						<option value="Offer Sent">Offer Sent</option>
						<option value="First Interview">First Interview</option>
						<option value="Second Interview">Second Interview</option>
						<option value="Final Interview">Final Interview</option>
						<option value="Assessment">Assessment</option>
						<option value="Phone Screen">Phone Screen</option>
						<option value="Applied">Applied</option>
					</select>
				</div>
				<div class="form-group">
					<label for="first_name">First Name:</label>
					<input class="form-control" type="text" name="first_name" required>
				</div>
				<div class="form-group">
					<label for="last_name">Last Name:</label>
					<input class="form-control" type="text" name="last_name" required>
				</div>
				<div class="form-group">
					<label for="profile_image">Profile Image:</label>
					<input class="form-control" type="file" name="profile_image">
				</div>
				<div class="row no-gutters">
					<div class="col-6">
						<div class="form-group">
							<label for="gender">Gender:</label>
							<select class="form-control" name="gender" required>
								<option value="Female">Female</option>
								<option value="Male">Male</option>
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="city">City:</label>
							<input class="form-control" type="text" name="city">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="country">Country:</label>
					<select class="form-control select2" name="country" required>
						@foreach($countries as $country)
						<option value='{{$country->name}}'>{{$country->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="telephone">Telephone:</label>
					<input class="form-control" type="text" name="telephone" required>
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input class="form-control" type="email" name="email" required>
				</div>
				<div class="form-group">
					<label for="resume">Resume:</label>
					<input class="form-control" type="file" name="resume" required>
				</div>
				<div class="form-group">
					<label for="resume_headline">Resume Headline</label>
					<textarea class="form-control" name="resume_headline"></textarea>
				</div>
				<div class="form-group">
					<label for="profile_summary">Profile Summary:</label>
					<textarea class="form-control" name="profile_summary"></textarea>
				</div>
				<div class="form-group">
					<label for="total_years_exp">Total Years of Experience:</label>
					<input class="form-control" type="text" name="total_years_exp">
				</div>
				<div class="form-group">
					<label for="work_history">Work History:</label>
					<textarea class="form-control" name="work_history"></textarea>
				</div>
				<div class="form-group">
					<label for="education">Education:</label>
					<textarea class="form-control" name="education"></textarea>
				</div>
				<div class="form-group">
					<label for="skills">Skills:</label>
					<input class="form-control" type="text" name="skills">
				</div>
				<div class="form-group">
					<label for="referees">Referees:</label>
					<input class="form-control" type="text" name="referees">
				</div>
				<div class="form-group">
					<label for="prefered_industry">Prefered Industry:</label>
					<input class="form-control" type="text" name="prefered_industry">
				</div>
				<div class="form-group">
					<label for="expected_salary">Expected Salary:</label>
					<input class="form-control" type="text" name="expected_salary">
				</div>
				<div class="row no-gutters">
					<div class="col-6">
						<button type="submit">submit</button>
					</div>
					<div class="col-6">
						<a href="/pages/recruitment/candidates/index" style="width: 100%; margin-left: 0">Back</a>
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