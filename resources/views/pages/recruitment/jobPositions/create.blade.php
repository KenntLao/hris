{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'HRIS | Recruitment - Job Positions')
@section('content_header')
@stop
@section('content')
<div class="row no-gutters">
	<div class="col-12 offset-md-2 col-md-8 box">
		<h3>add job position</h3>
		<div class="form-box">
			<form class="form-horizontal" method="post" action="/pages/recruitment/jobPositions" enctype="multipart/form-data">
				@csrf
				<div class="row no-gutters">
					<div class="col-6">
						<div class="form-group">
							<label for="job_code">Job Code:</label>
							<input class="form-control" type="text" name="job_code" required>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="job_title">Job Title:</label>
							<input class="form-control" type="text" name="job_title" required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="company_name">Company Name:</label>
					<input class="form-control" type="text" name="company_name">
				</div>
				<div class="form-group">
					<label for="hiring_manager">Hiring Manager:</label>
					<select class="form-control select2" name="hiring_manager">
						<option value="Not selected">Not selected</option>
						<option value="John Doe">John Doe</option>
						<option value="Jane Doe">Jane Doe</option>
					</select>
				</div>
				<div class="form-group">
					<label for="show_hiring_manager_name">Show Hiring Manager Name:</label>
					<select class="form-control select2" name="show_hiring_manager_name" required>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				<div class="form-group">
					<label for="short_description">Short Description:</label>
					<textarea class="form-control" name="short_description" required></textarea>
				</div>
				<div class="form-group">
					<label for="job_description">Job Description:</label>
					<textarea class="form-control" name="job_description" required></textarea>
				</div>
				<div class="form-group">
					<label for="requirements">Requirements:</label>
					<textarea class="form-control" name="requirements"></textarea>
				</div>
				<div class="form-group">
					<label for="benefits">Benefits:</label>
					@if (count($benefits) > 0)
					<select class="form-control select2" name="benefits">
						@foreach($benefits as $benefit)
						<option value="{{$benefits->name}}">{{$benefits->name}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control select2" name="benefits">
						<option value="None">None</option>
					</select>
					@endif
				</div>
				<div class="form-group">
					<label for="country">Country:</label>
					<select class="form-control select2" name="country" required>
						@foreach($countries as $country)
						<option value='{{$country->name}}'>{{$country->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="row no-gutters">
					<div class="col-6">
						<div class="form-group">
							<label for="city">City:</label>
							<input class="form-control" type="text" name="city">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="postal_code">Postal Code:</label>
							<input class="form-control" type="text" name="postal_code">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="department">Department:</label>
					<select class="form-control" name="department">
						<option value="Selected">Select</option>
						<option value="Lorem Ipsum 1">Lorem Ipsum 1</option>
						<option value="Lorem Ipsum 2">Lorem Ipsum 2</option>
					</select>
				</div>
				<div class="form-group">
					<label for="employment_type">Employment Type:</label>
					@if (count($employmentTypes) > 0)
					<select class="form-control" name="employment_type">
						@foreach($employmentTypes as $employmentType)
						<option value="{{$employmentType->name}}">{{$employmentType->name}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control" name="employment_type">
						<option value="None">None</option>
					</select>
					@endif
				</div>
				<div class="form-group">
					<label for="experience_level">Experience Level:</label>
					@if (count($experienceLevels) > 0)
					<select class="form-control" name="exp_level">
						@foreach($experienceLevels as $experienceLevel)
						<option value="{{$experienceLevel->name}}">{{$experienceLevel->name}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control" name="exp_level">
						<option value="None">None</option>
					</select>
					@endif
				</div>
				<div class="form-group">
					<label for="job_function">Job Function:</label>
					@if (count($jobFunctions) > 0)
					<select class="form-control" name="job_function">
						@foreach($jobFunctions as $jobFunction)
						<option value="{{$jobFunction->name}}">{{$jobFunction->name}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control" name="job_function">
						<option value="None">None</option>
					</select>
					@endif
				</div>
				<div class="form-group">
					<label for="education_level">Education Level:</label>
					@if (count($educationLevels) > 0)
					<select class="form-control" name="education_level">
						@foreach($educationLevels as $educationLevel)
						<option value="{{$educationLevel->name}}">{{$educationLevel->name}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control" name="education_level">
						<option value="None">None</option>
					</select>
					@endif
				</div>
				<div class="row no-gutters">
					<div class="col-6">
						<div class="form-group">
							<label for="show_salary">Show Salary:</label>
							<select class="form-control" name="show_salary" required>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="currency">Currency:</label>
							<select class="form-control" name="currency" required>
								<option value="Not selected">Not Selected</option>
								@foreach($currencies as $currency)
								<option value='{{$currency->name}}'>{{$currency->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="row no-gutters">
					<div class="col-6">
						<div class="form-group">
							<label for="salary_min">Salary Min:</label>
							<input class="form-control" type="text" name="salary_min">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="salary_max">Salary Max:</label>
							<input class="form-control" type="text" name="salary_max">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="keywords">Keywords:</label>
					<input class="form-control" type="text" name="keywords">
				</div>
				<div class="form-group">
					<label for="status">Status:</label>
					<select class="form-control" name="status">
						<option value="Active">Active</option>
						<option value="On hold">On Hold</option>
						<option value="Closed">Closed</option>
					</select>
				</div>
				<div class="form-group">
					<label for="closing_date">Closing Date:</label>
					<input class="form-control" type="date" name="closing_date">
				</div>
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" name="image" class="form-control">
				</div>
				<div class="form-group">
					<label for="display_type">Display Type:</label>
					<select class="form-control" name="display_type" required>
						<option value="Text Only">Text Only</option>
						<option value="Image Only">Image Only</option>
						<option value="Image and Full Text">Image and Full Text</option>
						<option value="Image and Other Details">Image and Other Details</option>
					</select>
				</div>
				<div class="row no-gutters">
					<div class="col-6">
						<button type="submit">submit</button>
					</div>
					<div class="col-6">
						<a href="/pages/recruitment/jobPositions/index" style="width: 100%; margin-left: 0">Back</a>
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
$(document).ready(function() {
    $('.select2').select2();
});
</script>
@stop