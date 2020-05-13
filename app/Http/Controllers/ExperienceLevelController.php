<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hris_experience_levels;

class ExperienceLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $experienceLevels = hris_experience_levels::all();
        return view('pages.recruitment.recruitmentSetup.experienceLevels.index', compact('experienceLevels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.recruitment.recruitmentSetup.experienceLevels.create');
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

        $experienceLevel = new hris_experience_levels(['name'=>$request->get('name')]);
        $experienceLevel->save();
        return redirect('/experienceLevels')->with('success', 'Experience level added!');
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
        $experienceLevel = hris_experience_levels::find($id);
        return view('pages.recruitment.recruitmentSetup.experienceLevels.edit', compact('experienceLevel'));
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

        $experienceLevel = hris_experience_levels::find($id);
        $experienceLevel->name = $request->get('name');
        $experienceLevel->save();
        return redirect('/experienceLevels')->with('success', 'Experience level updated!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experienceLevel = hris_experience_levels::find($id);
        $experienceLevel->delete();

        return redirect('/experienceLevels')->with('success','Experience level deleted!');
    }
}