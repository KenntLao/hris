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

/* ADMINISTRATION */

/* COMPANY PAGE */
Route::get('/pages/admin/company/index', 'CompanyController@index');
/* ADD COMPANY STRUCTURE */
Route::get('/pages/admin/company/create', 'CompanyController@create');
Route::post('/pages/admin/company', 'CompanyController@store');
/* EDIT COMPANY STRUCTURE */
Route::get('/pages/admin/company/{company}/edit', 'CompanyController@edit');
/* UPDATE COMPANY STRUCTURE */
Route::patch('/pages/admin/company/update/{company}', 'CompanyController@update');
/* DELETE COMPANY STRUCTURE */
Route::delete('/pages/admin/company/delete/{company}', 'CompanyController@destroy');

/* RECRUITMENT SETUP PAGE */
Route::get('/pages/recruitment/recruitmentSetup/index', 'RecruitmentSetupController@index');

/* BENEFITS PAGE */
Route::get('/pages/recruitment/recruitmentSetup/benefits/index', 'BenefitController@index');
/* ADD BENEFIT */
Route::get('/pages/recruitment/recruitmentSetup/benefits/create', 'BenefitController@create');
Route::post('/pages/recruitment/recruitmentSetup/benefits', 'BenefitController@store');
/* EDIT BENEFIT */
Route::get('/pages/recruitment/recruitmentSetup/benefits/{benefit}/edit', 'BenefitController@edit');
/* UPDATE BENEFIT */
Route::patch('/pages/recruitment/recruitmentSetup/benefits/update/{benefit}', 'BenefitController@update');
/* DELETE BENEFIT */
Route::delete('/pages/recruitment/recruitmentSetup/benefits/delete/{benefit}', 'BenefitController@destroy');

/* EMPLOYMENT TYPES PAGE */
Route::get('/pages/recruitment/recruitmentSetup/employmentTypes/index', 'EmploymentTypeController@index');
/* ADD EMPLOYMENT TYPE */
Route::get('/pages/recruitment/recruitmentSetup/employmentTypes/create', 'EmploymentTypeController@create');
Route::post('/pages/recruitment/recruitmentSetup/employmentTypes', 'EmploymentTypeController@store');
/* EDIT EMPLOYMENT TYPE */
Route::get('/pages/recruitment/recruitmentSetup/employmentTypes/{employmentType}/edit', 'EmploymentTypeController@edit');
/* UPDATE EMPLOYMENT TYPE */
Route::patch('/pages/recruitment/recruitmentSetup/employmentTypes/update/{employmentType}', 'EmploymentTypeController@update');
/* DELETE EMPLOYMENT TYPE */
Route::delete('/pages/recruitment/recruitmentSetup/employmentTypes/delete/{employmentType}', 'EmploymentTypeController@destroy');

/* EDUCATION LEVELS PAGE */
Route::get('/pages/recruitment/recruitmentSetup/educationLevels/index', 'EducationLevelController@index');
/* ADD EDUCATION LEVEL */
Route::get('/pages/recruitment/recruitmentSetup/educationLevels/create', 'EducationLevelController@create');
Route::post('/pages/recruitment/recruitmentSetup/educationLevels', 'EducationLevelController@store');
/* EDIT EDUCATION LEVEL */
Route::get('/pages/recruitment/recruitmentSetup/educationLevels/{educationLevel}/edit', 'EducationLevelController@edit');
/* UPDATE EDUCATION LEVEL */
Route::patch('/pages/recruitment/recruitmentSetup/educationLevels/update/{educationLevel}', 'EducationLevelController@update');
/* DELETE EDUCATION LEVEL */
Route::delete('/pages/recruitment/recruitmentSetup/educationLevels/delete/{educationLevel}', 'EducationLevelController@destroy');

/* EXPERIENCE LEVELS PAGE */
Route::get('/pages/recruitment/recruitmentSetup/experienceLevels/index', 'ExperienceLevelController@index');
/* ADD EXPERIENCE LEVEL */
Route::get('/pages/recruitment/recruitmentSetup/experienceLevels/create', 'ExperienceLevelController@create');
Route::post('/pages/recruitment/recruitmentSetup/experienceLevels', 'ExperienceLevelController@store');
/* EDIT EXPERIENCE LEVEL */
Route::get('/pages/recruitment/recruitmentSetup/experienceLevels/{experienceLevel}/edit', 'ExperienceLevelController@edit');
/* UPDATE EXPERIENCE LEVEL */
Route::patch('/pages/recruitment/recruitmentSetup/experienceLevels/update/{experienceLevel}', 'ExperienceLevelController@update');
/* DELETE EXPERIENCE LEVEL */
Route::delete('/pages/recruitment/recruitmentSetup/experienceLevels/delete/{experienceLevel}', 'ExperienceLevelController@destroy');

/* JOB FUNCTIONS PAGE */
Route::get('/pages/recruitment/recruitmentSetup/jobFunctions/index', 'JobFunctionController@index');
/* ADD JOB FUNCTION */
Route::get('/pages/recruitment/recruitmentSetup/jobFunctions/create', 'JobFunctionController@create');
Route::post('/pages/recruitment/recruitmentSetup/jobFunctions', 'JobFunctionController@store');
/* EDIT JOB FUNCTION */
Route::get('/pages/recruitment/recruitmentSetup/jobFunctions/{jobFunction}/edit', 'JobFunctionController@edit');
/* UPDATE JOB FUNCTION */
Route::patch('/pages/recruitment/recruitmentSetup/jobFunctions/update/{jobFunction}', 'JobFunctionController@update');
/* DELETE JOB FUNCTION */
Route::delete('/pages/recruitment/recruitmentSetup/jobFunctions/delete/{jobFunction}', 'JobFunctionController@destroy');

/* JOB POSITIONS PAGE */
Route::get('/pages/recruitment/jobPositions/index', 'JobPositionController@index');
/* ADD JOB POSITION */
Route::get('/pages/recruitment/jobPositions/create', 'JobPositionController@create');
Route::post('/pages/recruitment/jobPositions', 'JobPositionController@store');
/* EDIT JOB POSITION */
Route::get('/pages/recruitment/jobPositions/{jobPosition}/edit', 'JobPositionController@edit');
/* UPDATE JOB POSITION */
Route::patch('/pages/recruitment/jobPositions/update/{jobPosition}', 'JobPositionController@update');
/* DELETE JOB POSITION */
Route::delete('/pages/recruitment/jobPositions/delete/{jobPosition}', 'JobPositionController@destroy');


/* CANDIDATES PAGE */
Route::get('/pages/recruitment/candidates/index', 'CandidateController@index');
/* ADD CANDIDATE */
Route::get('/pages/recruitment/candidates/create', 'CandidateController@create');
Route::post('/pages/recruitment/candidates', 'CandidateController@store');
/* EDIT CANDIDATE */
Route::get('/pages/recruitment/candidates/{candidate}/edit', 'CandidateController@edit');
/* UPDATE CANDIDATE */
Route::patch('/pages/recruitment/candidates/update/{candidate}', 'CandidateController@update');
/* DELETE CANDIDATE */
Route::delete('/pages/recruitment/candidates/delete/{candidate}', 'CandidateController@destroy');

Route::get('/', function () {
    return view('welcome');
});
