<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* EMPLOYEES PAGE */
Route::resource('employees/employee/', 'EmployeeController');


/* JOB POSITIONS PAGE */
Route::resource('recruitment/jobPositions', 'JobPositionController');
Route::post('recruitment/jobPositions/create', 'JobPositionController@store');
Route::get('recruitment/jobPositions/{employmentTypes}/edit', 'JobPositionController@edit');

/* RECRUITMENT SETUP PAGE */
Route::resource('recruitment/recruitmentSetup', 'RecruitmentSetupController');

/* CANDIDATES PAGE */
Route::resource('recruitment/candidates', 'CandidateController');
Route::post('recruitment/candidates/create', 'CandidateController@store');
Route::get('recruitment/candidates/{employmentTypes}/edit', 'CandidateController@edit');

/* BENEFITS PAGE */
Route::resource('recruitment/benefits', 'BenefitController');
Route::post('recruitment/benefits/create', 'BenefitController@store');
Route::get('recruitment/benefits/{employmentTypes}/edit', 'BenefitController@edit');

/* EMPLOYMENT TYPES PAGE */
Route::resource('recruitment/employmentTypes', 'EmploymentTypeController');
Route::post('recruitment/employmentTypes/create', 'EmploymentTypeController@store');
Route::get('recruitment/employmentTypes/{employmentTypes}/edit', 'EmploymentTypeController@edit');

/* EDUCATION LEVELS PAGE */
Route::resource('recruitment/educationLevels', 'EducationLevelController');
Route::post('recruitment/educationLevels/create', 'EducationLevelController@store');
Route::get('recruitment/educationLevels/{employmentTypes}/edit', 'EducationLevelController@edit');

/* EXPERIENCE LEVELS PAGE */
Route::resource('recruitment/experienceLevels', 'ExperienceLevelController');
Route::post('recruitment/experienceLevels/create', 'ExperienceLevelController@store');
Route::get('recruitment/experienceLevels/{employmentTypes}/edit', 'ExperienceLevelController@edit');

/* JOB FUNCTIONS PAGE */
Route::resource('recruitment/jobFunctions', 'JobFunctionController');
Route::post('recruitment/jobFunctions/create', 'JobFunctionController@store');
Route::get('recruitment/jobFunctions/{employmentTypes}/edit', 'JobFunctionController@edit');

Route::get('/', function () {
    return view('welcome');
});
