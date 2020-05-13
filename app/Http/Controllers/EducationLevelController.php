<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hris_education_levels;

class EducationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $educationLevels = hris_education_levels::all();
        return view('pages.recruitment.recruitmentSetup.educationLevels.index', compact('educationLevels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.recruitment.recruitmentSetup.educationLevels.create');
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

        $educationLevel = new hris_education_levels(['name'=>$request->get('name')]);
        $educationLevel->save();
        return redirect('/educationLevels')->with('success', 'Education level added!');
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
        $educationLevel = hris_education_levels::find($id);
        return view('pages.recruitment.recruitmentSetup.educationLevels.edit', compact('educationLevel'));
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

        $educationLevel = hris_education_levels::find($id);
        $educationLevel->name = $request->get('name');
        $educationLevel->save();
        return redirect('/educationLevels')->with('success', 'Education level updated!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $educationLevel = hris_education_levels::find($id);
        $educationLevel->delete();

        return redirect('/educationLevels')->with('success','Education level deleted!');
    }
}
