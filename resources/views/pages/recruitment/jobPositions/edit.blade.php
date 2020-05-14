{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1><a href="{{ route('recruitmentSetup.index') }}">Recruitment Setup</a></h1>
@stop
@section('content')
<div class="row no-gutters">
	<div class="col-12 box">
		<a href="{{ route('jobPositions.index') }}">Back</a>
		<div class="form-box">
			<form class="form-horizontal" method="post" action="{{ route('jobPositions.update', $jobPosition->id) }}">
				@csrf
				@method('PATCH')
				<div class="form-group">
					<label for="job_code">Job Code:</label>
					<input class="form-control" type="text" name="job_code" value="{{$jobPosition->job_code}}" required>
				</div>
				<div class="form-group">
					<label for="job_title">Job Title:</label>
					<input class="form-control" type="text" name="job_title" value="{{$jobPosition->job_title}}" required>
				</div>
				<div class="form-group">
					<label for="company_name">Company Name:</label>
					<input class="form-control" type="text" name="company_name" value="{{$jobPosition->company_name}}">
				</div>
				<div class="form-group">
					<label for="hiring_manager">Hiring Manager:</label>
					<select class="form-control" name="hiring_manager">
						<option value="{{$jobPosition->hiring_manager}}">{{$jobPosition->hiring_manager}}</option>
						<option value="Not Selected">Not Selected</option>
						<option value="John Doe">John Doe</option>
						<option value="Jane Doe">Jane Doe</option>
					</select>
				</div>
				<div class="form-group">
					<label for="show_hiring_manager_name">Show Hiring Manager Name:</label>
					<select class="form-control" name="show_hiring_manager_name" required>
						<option value="{{$jobPosition->show_hiring_manager_name}}">{{$jobPosition->show_hiring_manager_name}}</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				<div class="form-group">
					<label for="short_description">Short Description:</label>
					<input class="form-control" type="text" name="short_description" value="{{$jobPosition->short_description}}" required>
				</div>
				<div class="form-group">
					<label for="job_description">Job Description:</label>
					<input class="form-control" type="text" name="job_description" value="{{$jobPosition->job_description}}" required>
				</div>
				<div class="form-group">
					<label for="requirements">Requirements:</label>
					<input class="form-control" type="text" name="requirements" value="{{$jobPosition->requirements}}">
				</div>
				<div class="form-group">
					<label for="benefits">Benefits:</label>
					@if (count($benefits) > 0)
					<select class="form-control" name="benefits">
						@foreach($benefits as $benefit)
						<option value="None">None</option>
						<option value="{{$benefit->name}}">{{$benefit->name}}</option>
						<option value="{{$jobPosition->benefits}}">{{$jobPosition->benefits}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control" name="benefits">
						<option value="None">None</option>
						<option value="{{$jobPosition->benefits}}">{{$jobPosition->benefits}}</option>
					</select>
					@endif
				</div>
				<div class="form-group">
					<label for="country">Country:</label>
					<select class="form-control" name="country" required>
						<option value="{{$jobPosition->country}}" selected>{{$jobPosition->country}}</option>
						<option value="Afganistan">Afghanistan</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="American Samoa">American Samoa</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Antigua & Barbuda">Antigua & Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Aruba">Aruba</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bermuda">Bermuda</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bonaire">Bonaire</option>
						<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Brazil">Brazil</option>
						<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
						<option value="Brunei">Brunei</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Canary Islands">Canary Islands</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Cayman Islands">Cayman Islands</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Channel Islands">Channel Islands</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Christmas Island">Christmas Island</option>
						<option value="Cocos Island">Cocos Island</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Congo">Congo</option>
						<option value="Cook Islands">Cook Islands</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Cote DIvoire">Cote DIvoire</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Curaco">Curacao</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="East Timor">East Timor</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Falkland Islands">Falkland Islands</option>
						<option value="Faroe Islands">Faroe Islands</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="French Guiana">French Guiana</option>
						<option value="French Polynesia">French Polynesia</option>
						<option value="French Southern Ter">French Southern Ter</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Great Britain">Great Britain</option>
						<option value="Greece">Greece</option>
						<option value="Greenland">Greenland</option>
						<option value="Grenada">Grenada</option>
						<option value="Guadeloupe">Guadeloupe</option>
						<option value="Guam">Guam</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guinea">Guinea</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Hawaii">Hawaii</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="Indonesia">Indonesia</option>
						<option value="India">India</option>
						<option value="Iran">Iran</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Isle of Man">Isle of Man</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="Korea North">Korea North</option>
						<option value="Korea Sout">Korea South</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Laos">Laos</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libya">Libya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macau">Macau</option>
						<option value="Macedonia">Macedonia</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Malawi">Malawi</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Martinique">Martinique</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mayotte">Mayotte</option>
						<option value="Mexico">Mexico</option>
						<option value="Midway Islands">Midway Islands</option>
						<option value="Moldova">Moldova</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Myanmar">Myanmar</option>
						<option value="Nambia">Nambia</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherland Antilles">Netherland Antilles</option>
						<option value="Netherlands">Netherlands (Holland, Europe)</option>
						<option value="Nevis">Nevis</option>
						<option value="New Caledonia">New Caledonia</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Niue">Niue</option>
						<option value="Norfolk Island">Norfolk Island</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Palau Island">Palau Island</option>
						<option value="Palestine">Palestine</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Phillipines">Philippines</option>
						<option value="Pitcairn Island">Pitcairn Island</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Puerto Rico">Puerto Rico</option>
						<option value="Qatar">Qatar</option>
						<option value="Republic of Montenegro">Republic of Montenegro</option>
						<option value="Republic of Serbia">Republic of Serbia</option>
						<option value="Reunion">Reunion</option>
						<option value="Romania">Romania</option>
						<option value="Russia">Russia</option>
						<option value="Rwanda">Rwanda</option>
						<option value="St Barthelemy">St Barthelemy</option>
						<option value="St Eustatius">St Eustatius</option>
						<option value="St Helena">St Helena</option>
						<option value="St Kitts-Nevis">St Kitts-Nevis</option>
						<option value="St Lucia">St Lucia</option>
						<option value="St Maarten">St Maarten</option>
						<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
						<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
						<option value="Saipan">Saipan</option>
						<option value="Samoa">Samoa</option>
						<option value="Samoa American">Samoa American</option>
						<option value="San Marino">San Marino</option>
						<option value="Sao Tome & Principe">Sao Tome & Principe</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="Solomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syria">Syria</option>
						<option value="Tahiti">Tahiti</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Tanzania">Tanzania</option>
						<option value="Thailand">Thailand</option>
						<option value="Togo">Togo</option>
						<option value="Tokelau">Tokelau</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad & Tobago">Trinidad & Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Turks & Caicos Is">Turks & Caicos Is</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Erimates">United Arab Emirates</option>
						<option value="United States of America">United States of America</option>
						<option value="Uraguay">Uruguay</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Vatican City State">Vatican City State</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Vietnam">Vietnam</option>
						<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
						<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
						<option value="Wake Island">Wake Island</option>
						<option value="Wallis & Futana Is">Wallis & Futana Is</option>
						<option value="Yemen">Yemen</option>
						<option value="Zaire">Zaire</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
					</select>
				</div>
				<div class="form-group">
					<label for="city">City:</label>
					<input class="form-control" type="text" name="city" value="{{$jobPosition->city}}">
				</div>
				<div class="form-group">
					<label for="postal_code">Postal Code:</label>
					<input class="form-control" type="text" name="postal_code" value="{{$jobPosition->postal_code}}">
				</div>
				<div class="form-group">
					<label for="department">Department:</label>
					<select class="form-control" name="department">
						<option value="Selected">Select</option>
						<option value="{{$jobPosition->department}}" selected>{{$jobPosition->department}}</option>
						<option value="Lorem Ipsum 1">Lorem Ipsum 1</option>
						<option value="Lorem Ipsum 2">Lorem Ipsum 2</option>
					</select>
				</div>
				<div class="form-group">
					<label for="employment_type">Employment Type:</label>
					@if (count($employmentTypes) > 0)
					<select class="form-control" name="employment_type">
						@foreach($employmentTypes as $employmentType)
						<option value="None">None</option>
						<option value="{{$jobPosition->employment_type}}" selected>{{$jobPosition->employment_type}}</option>
						<option value="{{$employmentType->name}}">{{$employmentType->name}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control" name="employment_type">
						<option value="None">None</option>
						<option value="{{$jobPosition->employment_type}}" selected>{{$jobPosition->employment_type}}</option>
					</select>
					@endif
				</div>
				<div class="form-group">
					<label for="experience_level">Experience Level:</label>
					@if (count($experienceLevels) > 0)
					<select class="form-control" name="exp_level">
						@foreach($experienceLevels as $experienceLevel)
						<option value="None">None</option>
						<option value="{{$jobPosition->exp_level}}" selected>{{$jobPosition->exp_level}}</option>
						<option value="{{$benefit->name}}">{{$experienceLevel->name}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control" name="exp_level">
						<option value="None">None</option>
						<option value="{{$jobPosition->exp_level}}" selected>{{$jobPosition->exp_level}}</option>
					</select>
					@endif
				</div>
				<div class="form-group">
					<label for="job_function">Job Function:</label>
					@if (count($jobFunctions) > 0)
					<select class="form-control" name="job_function">
						@foreach($jobFunctions as $jobFunction)
						<option value="None">None</option>
						<option value="{{$jobPosition->job_function}}" selected>{{$jobPosition->job_function}}</option>
						<option value="{{$benefit->name}}">{{$jobFunction->name}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control" name="job_function">
						<option value="None">None</option>
						<option value="{{$jobPosition->job_function}}" selected>{{$jobPosition->job_function}}</option>
					</select>
					@endif
				</div>
				<div class="form-group">
					<label for="education_level">Education Level:</label>
					@if (count($educationLevels) > 0)
					<select class="form-control" name="education_level">
						@foreach($educationLevels as $educationLevel)
						<option value="None">None</option>
						<option value="{{$jobPosition->education_level}}" selected>{{$jobPosition->education_level}}</option>
						<option value="{{$benefit->name}}">{{$educationLevel->name}}</option>
						@endforeach
					</select>
					@else
					<select class="form-control" name="education_level">
						<option value="None">None</option>
						<option value="{{$jobPosition->education_level}}" selected>{{$jobPosition->education_level}}</option>
					</select>
					@endif
				</div>
				<div class="form-group">
					<label for="show_salary">Show Salary:</label>
					<select class="form-control" name="show_salary" required>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="{{$jobPosition->show_salary}}" selected>{{$jobPosition->show_salary}}</option>
					</select>
				</div>
				<div class="form-group">
					<label for="currency">Curremcy:</label>
					<select class="form-control" name="currency" required>
						<option value="Not selected">Not selected</option>
						<option value="Philippine Peso">Philippine Peso</option>
						<option value="{{$jobPosition->currency}}" selected>{{$jobPosition->currency}}</option>
					</select>
				</div>
				<div class="form-group">
					<label for="salary_min">Salary Min:</label>
					<input class="form-control" type="text" name="salary_min"  value="{{$jobPosition->salary_min}}">
				</div>
				<div class="form-group">
					<label for="salary_max">Salary Max:</label>
					<input class="form-control" type="text" name="salary_max"   value="{{$jobPosition->salary_max}}">
				</div>
				<div class="form-group">
					<label for="keywords">Keywords:</label>
					<input class="form-control" type="text" name="keywords"  value="{{$jobPosition->keywords}}">
				</div>
				<div class="form-group">
					<label for="status">Status:</label>
					<select class="form-control" name="status">
						<option value="Active">Active</option>
						<option value="On hold">On Hold</option>
						<option value="Closed">Closed</option>
						<option value="{{$jobPosition->status}}" selected>{{$jobPosition->status}}</option>
					</select>
				</div>
				<div class="form-group">
					<label for="closing_date">Closing Date:</label>
					<input class="form-control" type="date" name="closing_date"  value="{{$jobPosition->closing_date}}">
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
						<option value="{{$jobPosition->display_type}}" selected>{{$jobPosition->display_type}}</option>
					</select>
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