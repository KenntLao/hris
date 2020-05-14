<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hris_employment_types;

class EmploymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employmentTypes = hris_employment_types::all();
        return view('pages.recruitment.recruitmentSetup.employmentTypes.index', compact('employmentTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.recruitment.recruitmentSetup.employmentTypes.create');
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

        $employmentType = new hris_employment_types(['name'=>$request->get('name')]);
        $employmentType->save();
        return redirect('/employmentTypes')->with('success', 'Employment type added!');

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
        $employmentType = hris_employment_types::find($id);
        return view('pages.recruitment.recruitmentSetup.employmentTypes.edit', compact('employmentType'));
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

        $employmentType = hris_employment_types::find($id);
        $employmentType->name = $request->get('name');
        $employmentType->save();
        return redirect('/employmentTypes')->with('success', 'Employment type updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employmentType = hris_employment_types::find($id);
        $employmentType->delete();

        return redirect('/employmentTypes')->with('success','Employment type deleted!');
    }
}
