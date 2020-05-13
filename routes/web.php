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
/* JOB POSITIONS PAGE */
Route::resource('jobPositions', 'JobPositionController');
Route::post('jobPositions/create', 'JobPositionController@store');
Route::get('jobPositions/{employmentTypes}/edit', 'JobPositionController@edit');

/* RECRUITMENT SETUP PAGE */
Route::resource('recruitmentSetup', 'RecruitmentSetupController');

/* CANDIDATES PAGE */
Route::resource('candidates', 'CandidateController');
Route::post('candidates/create', 'CandidateController@store');
Route::get('candidates/{employmentTypes}/edit', 'CandidateController@edit');

/* BENEFITS PAGE */
Route::resource('benefits', 'BenefitController');
Route::post('benefits/create', 'BenefitController@store');
Route::get('benefits/{employmentTypes}/edit', 'BenefitController@edit');

/* EMPLOYMENT TYPES PAGE */
Route::resource('employmentTypes', 'EmploymentTypeController');
Route::post('employmentTypes/create', 'EmploymentTypeController@store');
Route::get('employmentTypes/{employmentTypes}/edit', 'EmploymentTypeController@edit');

/* EDUCATION LEVELS PAGE */
Route::resource('educationLevels', 'EducationLevelController');
Route::post('educationLevels/create', 'EducationLevelController@store');
Route::get('educationLevels/{employmentTypes}/edit', 'EducationLevelController@edit');

/* EXPERIENCE LEVELS PAGE */
Route::resource('experienceLevels', 'ExperienceLevelController');
Route::post('experienceLevels/create', 'ExperienceLevelController@store');
Route::get('experienceLevels/{employmentTypes}/edit', 'ExperienceLevelController@edit');

/* JOB FUNCTIONS PAGE */
Route::resource('jobFunctions', 'JobFunctionController');
Route::post('jobFunctions/create', 'JobFunctionController@store');
Route::get('jobFunctions/{employmentTypes}/edit', 'JobFunctionController@edit');

Route::get('/', function () {
    return view('welcome');
});
