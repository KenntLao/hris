<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hris_candidates;
use App\hris_job_positions;
use App\hris_countries;

class CandidateController extends Controller
{

    public function index()
    {
        $candidates = hris_candidates::paginate(10);
        return view('pages.recruitment.candidates.index', compact('candidates'));
    }

    public function create(hris_candidates $candidate)
    {   
        $jobPositions = hris_job_positions::all();
        $countries = hris_countries::all()->sortBy('name');
        $candidate = hris_candidates::all();
        return view('pages.recruitment.candidates.create', compact('candidate', 'jobPositions', 'countries'));
    }

    public function store(Request $request)
    {

        $candidate = new hris_candidates();

        if ( $request->hasFile('profile_image') && $request->hasFile('resume') ) {
            if($this->validatedData()) {
                $imageName = time() . '.' . $request->profile_image->extension();
                $resume = time() . '.' . $request->resume->extension();
                $candidate->position_applied = request('position_applied');
                $candidate->hiring_stage = request('hiring_stage');
                $candidate->first_name = request('first_name');
                $candidate->last_name = request('last_name');
                $candidate->profile_image = $imageName;
                $candidate->gender = request('gender');
                $candidate->city = request('city');
                $candidate->country = request('country');
                $candidate->telephone = request('telephone');
                $candidate->email = request('email');
                $candidate->resume = $resume;
                $candidate->resume_headline = request('resume_headline');
                $candidate->profile_summary = request('profile_summary');
                $candidate->total_years_exp = request('total_years_exp');
                $candidate->work_history = request('work_history');
                $candidate->education = request('education');
                $candidate->skills = request('skills');
                $candidate->referees = request('referees');
                $candidate->prefered_industry = request('prefered_industry');
                $candidate->expected_salary = request('expected_salary');
                $request->profile_image->move(public_path('assets/images/candidates/profile_image'), $imageName);
                $request->resume->move(public_path('assets/images/candidates/resume'), $resume);
                $candidate->save();
                return redirect('/pages/recruitment/candidates/index')->with('success','Candidate successfully added!');
            } else {
                return back()->withErrors($this->validatedData());
            }
        } else {
            return back()->withErrors($this->validatedData());
        }
    }

    public function show($id)
    {
        //
    }

    public function edit(hris_candidates $candidate)
    {
        $jobPositions = hris_job_positions::all()->sortBy('job_title');
        $countries = hris_countries::all()->sortBy('name');
        return view('pages.recruitment.candidates.edit', compact('candidate', 'countries', 'jobPositions'));
    }

    public function update(hris_candidates $candidate, Request $request)
    {
        if ( $request->hasFile('profile_image') && $request->hasFile('resume') ) {
            if($this->validatedData()) {
                $pathCandidate = public_path('assets/images/candidates/profile_image/');
                $pathResume = public_path('assets/images/candidates/resume/');
                $imageName = time() . '.' . $request->profile_image->extension();
                $resume = time() . '.' . $request->resume->extension();
                if ($candidate->profile_image != '' && $candidate->profile_image != NULL) {
                    $old_file_1 = $pathCandidate . $candidate->profile_image;
                    unlink($old_file_1);
                }
                if ($candidate->resume != '' && $candidate->resume != NULL) {
                    $old_file_2 = $pathResume . $candidate->resume;
                    unlink($old_file_2);
                }
                $candidate->position_applied = request('position_applied');
                $candidate->hiring_stage = request('hiring_stage');
                $candidate->first_name = request('first_name');
                $candidate->last_name = request('last_name');
                $candidate->profile_image = $imageName;
                $candidate->gender = request('gender');
                $candidate->city = request('city');
                $candidate->country = request('country');
                $candidate->telephone = request('telephone');
                $candidate->email = request('email');
                $candidate->resume = $resume;
                $candidate->resume_headline = request('resume_headline');
                $candidate->profile_summary = request('profile_summary');
                $candidate->total_years_exp = request('total_years_exp');
                $candidate->work_history = request('work_history');
                $candidate->education = request('education');
                $candidate->skills = request('skills');
                $candidate->referees = request('referees');
                $candidate->prefered_industry = request('prefered_industry');
                $candidate->expected_salary = request('expected_salary');
                $request->profile_image->move(public_path('assets/images/candidates/profile_image'), $imageName);
                $request->resume->move(public_path('assets/images/candidates/resume'), $resume);
                $candidate->update();
                return redirect('/pages/recruitment/candidates/index')->with('success','Candidate successfully updated!');
            } else {
                return back()->withErrors($this->validatedData());
            }
        } else {
            if($this->validatedData()) {
                $candidate->position_applied = request('position_applied');
                $candidate->hiring_stage = request('hiring_stage');
                $candidate->first_name = request('first_name');
                $candidate->last_name = request('last_name');
                $candidate->gender = request('gender');
                $candidate->city = request('city');
                $candidate->country = request('country');
                $candidate->telephone = request('telephone');
                $candidate->email = request('email');
                $candidate->resume_headline = request('resume_headline');
                $candidate->profile_summary = request('profile_summary');
                $candidate->total_years_exp = request('total_years_exp');
                $candidate->work_history = request('work_history');
                $candidate->education = request('education');
                $candidate->skills = request('skills');
                $candidate->referees = request('referees');
                $candidate->prefered_industry = request('prefered_industry');
                $candidate->expected_salary = request('expected_salary');
                $candidate->update();
                return redirect('/pages/recruitment/candidates/index')->with('success','Candidate successfully updated!');
            } else {
                return back()->withErrors($this->validatedData());
            }
        }

    }

    public function destroy(hris_candidates $candidate)
    {
        $candidate->delete();
        $pathCandidate = public_path('assets/images/candidates/profile_image/');
        $pathResume = public_path('assets/images/candidates/resume/');
        if ($candidate->profile_image != '' && $candidate->profile_image != NULL) {
            $old_file_1 = $pathCandidate . $candidate->profile_image;
            unlink($old_file_1);
        }
        if ($candidate->resume != '' && $candidate->resume != NULL) {
            $old_file_2 = $pathResume . $candidate->resume;
            unlink($old_file_2);
        }
        return redirect('/pages/recruitment/candidates/index')->with('success','Candidate successfully deleted!');
    }

    protected function validatedData() {

        return request()->validate([

            'position_applied'=>'required',
            'hiring_stage'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'country'=>'required',
            'telephone'=>'required',
            'email'=>'required',  
            'prefered_industry'=>'required'
        ]);

    }

}
