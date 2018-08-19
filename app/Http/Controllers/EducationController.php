<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = education::all();
        return view('admin_res.cv.education',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return $this->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,education::rules($request->method()));
        Auth()->user()->educations()->create($request->all());
        $request->session()->flash('alert-success', 'Data added successfully!');

        return redirect(route('education.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(education $education)
    {
        return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(education $education)
    {

        $educations= education::all();
        return view('admin_res.cv.education', compact(['education','educations']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, education $education)
    {
        $this->validate($request,education::rules($request->method()));


        $education->update($request->all());

        $request->session()->flash('alert-success', 'Data Updated successfully!');
        return redirect(route('education.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(education $education)
    {
        // dont delete if education has product
        $education->delete();
        return redirect()->route('education.index')->with('alert-success', 'Data Deleted!');
    }
}
