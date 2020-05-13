<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hris_job_positions;
use App\hris_benefits;
use App\hris_employment_types;
use App\hris_education_levels;
use App\hris_experience_levels;
use App\hris_job_functions;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobPositions = hris_job_positions::all();

        return view('pages.recruitment.jobPositions.index', compact('jobPositions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $benefits = hris_benefits::all();
        $employmentTypes = hris_employment_types::all();
        $educationLevels = hris_education_levels::all();
        $experienceLevels = hris_experience_levels::all();
        $jobFunctions = hris_job_functions::all();
        return view('pages.recruitment.jobPositions.create', compact('benefits','employmentTypes', 'educationLevels', 'experienceLevels', 'jobFunctions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([

            'job_code'=>'required',
            'job_title'=>'required',
            'show_hiring_manager_name'=>'required',
            'short_description'=>'required',
            'job_description'=>'required',
            'benefits'=>'required',
            'country'=>'required',
            'city'=>'required',
            'postal_code'=>'required',
            'show_salary'=>'required',
            'currency'=>'required',
            'status'=>'required',
            'display_type'=>'required'

        ]);

        $jobPosition = new hris_job_positions([

            'job_code'=>$request->get('job_code'),
            'job_title'=>$request->get('job_title'),
            'company_name'=>$request->get('company_name'),
            'hiring_manager'=>$request->get('hiring_manager'),
            'show_hiring_manager_name'=>$request->get('show_hiring_manager_name'),
            'short_description'=>$request->get('short_description'),
            'job_description'=>$request->get('job_description'),
            'requirements'=>$request->get('requirements'),
            'benefits'=>$request->get('benefits'),
            'country'=>$request->get('country'),
            'city'=>$request->get('city'),
            'postal_code'=>$request->get('postal_code'),
            'department'=>$request->get('department'),
            'employment_type'=>$request->get('employment_type'),
            'exp_level'=>$request->get('exp_level'),
            'job_function'=>$request->get('job_function'),
            'education_level'=>$request->get('education_level'),
            'show_salary'=>$request->get('show_salary'),
            'currency'=>$request->get('currency'),
            'salary_min'=>$request->get('salary_min'),
            'salary_max'=>$request->get('salary_max'),
            'keywords'=>$request->get('keywords'),
            'status'=>$request->get('status'),
            'closing_date'=>$request->get('closing_date'),
            'image'=>$request->get('image'),
            'display_type'=>$request->get('display_type'),

        ]);

        $jobPosition->save();
        return redirect('/jobPositions')->with('success', 'Job Position added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobPosition = hris_job_positions::find($id);
        $benefits = hris_benefits::all();
        $employmentTypes = hris_employment_types::all();
        $educationLevels = hris_education_levels::all();
        $experienceLevels = hris_experience_levels::all();
        $jobFunctions = hris_job_functions::all();
        return view('pages.recruitment.jobPositions.edit', compact('jobPosition','benefits','employmentTypes', 'educationLevels', 'experienceLevels', 'jobFunctions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'job_code'=>'required',
            'job_title'=>'required',
            'show_hiring_manager_name'=>'required',
            'short_description'=>'required',
            'job_description'=>'required',
            'benefits'=>'required',
            'country'=>'required',
            'city'=>'required',
            'postal_code'=>'required',
            'show_salary'=>'required',
            'currency'=>'required',
            'status'=>'required',
            'display_type'=>'required'

        ]);

        $jobPosition = hris_job_positions::find($id);
        $jobPosition->job_code = $request->get('job_code');
        $jobPosition->job_title = $request->get('job_title');
        $jobPosition->company_name = $request->get('company_name');
        $jobPosition->hiring_manager = $request->get('hiring_manager');
        $jobPosition->show_hiring_manager_name = $request->get('show_hiring_manager_name');
        $jobPosition->short_description = $request->get('short_description');
        $jobPosition->job_description = $request->get('job_description');
        $jobPosition->requirements = $request->get('requirements');
        $jobPosition->benefits = $request->get('benefits');
        $jobPosition->country = $request->get('country');
        $jobPosition->city = $request->get('city');
        $jobPosition->postal_code = $request->get('postal_code');
        $jobPosition->department = $request->get('department');
        $jobPosition->employment_type = $request->get('employment_type');
        $jobPosition->exp_level = $request->get('exp_level');
        $jobPosition->job_function = $request->get('job_function');
        $jobPosition->education_level = $request->get('education_level');
        $jobPosition->show_salary = $request->get('show_salary');
        $jobPosition->show_salary = $request->get('show_salary');
        $jobPosition->salary_min = $request->get('salary_min');
        $jobPosition->salary_max = $request->get('salary_max');
        $jobPosition->keywords = $request->get('keywords');
        $jobPosition->status = $request->get('status');
        $jobPosition->closing_date = $request->get('closing_date');
        $jobPosition->image = $request->get('image');
        $jobPosition->display_type = $request->get('display_type');
        $jobPosition->save();
        return redirect('/jobPositions')->with('success', 'Job position updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobPosition = hris_job_positions::find($id);
        $jobPosition->delete();

        return redirect('/jobPositions')->with('success','Education level deleted!');
    }
}
