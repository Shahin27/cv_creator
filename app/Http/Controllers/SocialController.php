<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = social::all();
        return view('admin_res.cv.social',compact('socials'));
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


        $this->validate($request,social::rules($request->method()));
        Auth()->user()->socials()->create($request->all());
        $request->session()->flash('alert-success', 'Data added successfully!');

        return redirect(route('social.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(social $social)
    {
        return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(social $social)
    {

        $socials= social::all();
        return view('admin_res.cv.social', compact(['social','socials']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, social $social)
    {
        $this->validate($request,social::rules($request->method()));


        $social->update($request->all());

        $request->session()->flash('alert-success', 'Data Updated successfully!');
        return redirect(route('social.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(social $social)
    {
        // dont delete if social has product
        $social->delete();
        return redirect()->route('social.index')->with('alert-success', 'Data Deleted!');
    }
}
