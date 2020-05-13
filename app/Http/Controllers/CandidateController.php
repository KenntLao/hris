<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hris_candidates;
use App\hris_job_positions;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = hris_candidates::all();
        return view('pages.recruitment.candidates.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $jobPositions = hris_job_positions::all();
        return view('pages.recruitment.candidates.create', compact('jobPositions'));
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

            'position_applied'=>'required',
            'hiring_stage'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'country'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'resume'=>'required',   
            'prefered_industry'=>'required'
        ]);

        $candidate = new hris_candidates([
            'position_applied'=>$request->get('position_applied'),
            'hiring_stage'=>$request->get('hiring_stage'),
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'profile_image'=>$request->get('profile_image'),
            'gender'=>$request->get('gender'),
            'city'=>$request->get('city'),
            'country'=>$request->get('country'),
            'telephone'=>$request->get('telephone'),
            'email'=>$request->get('email'),
            'resume'=>$request->get('resume'),
            'resume_headline'=>$request->get('resume_headline'),
            'profile_summary'=>$request->get('profile_summary'),
            'total_years_exp'=>$request->get('total_years_exp'),
            'work_history'=>$request->get('work_history'),
            'education'=>$request->get('education'),
            'skills'=>$request->get('skills'),
            'referees'=>$request->get('referees'),
            'prefered_industry'=>$request->get('prefered_industry'),
            'expected_salary'=>$request->get('expected_salary')
        ]);
        $candidate->save();
        return redirect('/candidates')->with('success', 'Candidate added!');
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
        $candidate = hris_candidates::find($id);
        $jobPositions = hris_job_positions::all();
        return view('pages.recruitment.candidates.edit', compact('candidate', 'jobPositions'));
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

            'position_applied'=>'required',
            'hiring_stage'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'country'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'resume'=>'required',   
            'prefered_industry'=>'required'
        ]);
        $candidate = hris_candidates::find($id);
        $candidate->position_applied = $request->get('position_applied');
        $candidate->hiring_stage = $request->get('hiring_stage');
        $candidate->first_name = $request->get('first_name');
        $candidate->last_name = $request->get('last_name');
        $candidate->profile_image = $request->get('profile_image');
        $candidate->gender = $request->get('gender');
        $candidate->city = $request->get('city');
        $candidate->country = $request->get('country');
        $candidate->telephone = $request->get('telephone');
        $candidate->email = $request->get('email');
        $candidate->resume = $request->get('resume');
        $candidate->resume_headline = $request->get('resume_headline');
        $candidate->profile_summary = $request->get('profile_summary');
        $candidate->total_years_exp = $request->get('total_years_exp');
        $candidate->work_history = $request->get('work_history');
        $candidate->education = $request->get('education');
        $candidate->skills = $request->get('skills');
        $candidate->referees = $request->get('referees');
        $candidate->prefered_industry = $request->get('prefered_industry');
        $candidate->expected_salary = $request->get('expected_salary');
        $candidate->save();
        return redirect('/candidates')->with('success','Candidate updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidate = hris_candidates::find($id);
        $candidate->delete();
        return redirect('/candidates')->with('success','Candidate deleted!');
    }
}
