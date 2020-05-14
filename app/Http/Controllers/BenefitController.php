<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hris_benefits;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $benefits = hris_benefits::all();
        return view('pages.recruitment.recruitmentSetup.benefits.index', compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.recruitment.recruitmentSetup.benefits.create');
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

        $benefit = new hris_benefits(['name'=>$request->get('name')]);
        $benefit->save();
        return redirect('/benefits')->with('success', 'Benefit added!');
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
        $benefit = hris_benefits::find($id);
        return view('pages.recruitment.recruitmentSetup.benefits.edit', compact('benefit'));
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

        $benefit = hris_benefits::find($id);
        $benefit->name = $request->get('name');
        $benefit->save();
        return redirect('/benefits')->with('success', 'Benefit updated!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $benefit = hris_benefits::find($id);
        $benefit->delete();

        return redirect('/benefits')->with('success','Benefit deleted!');
    }
}