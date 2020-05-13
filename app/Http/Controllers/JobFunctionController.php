<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hris_job_functions;

class JobFunctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $jobFunctions = hris_job_functions::all();
        return view('pages.recruitment.recruitmentSetup.jobFunctions.index', compact('jobFunctions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.recruitment.recruitmentSetup.jobFunctions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required']);

        $jobFunction = new hris_job_functions(['name'=>$request->get('name')]);
        $jobFunction->save();
        return redirect('/jobFunctions')->with('success', 'Job function added!');
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
        $jobFunction = hris_job_functions::find($id);
        return view('pages.recruitment.recruitmentSetup.jobFunctions.edit', compact('jobFunction'));
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
        $request->validate(['name'=>'required']);

        $jobFunction = hris_job_functions::find($id);
        $jobFunction->name = $request->get('name');
        $jobFunction->save();
        return redirect('/jobFunctions')->with('success', 'Job function updated!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobFunction = hris_job_functions::find($id);
        $jobFunction->delete();

        return redirect('/jobFunctions')->with('success','Job function deleted!');
    }
}