<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = experience::all();
        return view('admin_res.cv.experience',compact('experiences'));
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
        $this->validate($request,experience::rules($request->method()));
        Auth()->user()->experiences()->create($request->all());
        $request->session()->flash('alert-success', 'Data added successfully!');

        return redirect(route('experience.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(experience $experience)
    {
        return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(experience $experience)
    {

        $experiences= experience::all();
        return view('admin_res.cv.experience', compact(['experience','experiences']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, experience $experience)
    {
        $this->validate($request,experience::rules($request->method()));


        $experience->update($request->all());

        $request->session()->flash('alert-success', 'Data Updated successfully!');
        return redirect(route('experience.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(experience $experience)
    {
        // dont delete if experience has product
        $experience->delete();
        return redirect()->route('experience.index')->with('alert-success', 'Data Deleted!');
    }
}
