<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Social;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $u = Auth()->user();
        if($u->cv == null){
            $cv = $this->create_user_cv();
        }else{
            $cv = $u->cv;
        }

        $socials= Social::all();
        $experiences= Experience::all();
        $educations= Education::all();
        $skills= Skill::all();
        return view('admin_res.cv.index',compact('cv','socials','experiences','educations','skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(Cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $u = Auth()->user();
        if($u->cv == null){
            $cv = $this->create_user_cv();
        }else{
            $cv = $u->cv;
        }
        return view('admin_res.cv.edit',compact('cv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cv $cv)
    {
        $this->validate($request,Cv::rules($request->method()));
        $cv->update($request->all());
        $request->session()->flash('alert-success', 'Data Updated successfully!');
        return $this->edit();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cv $cv)
    {
        //
    }
    private function create_user_cv(){
        $u = Auth()->user();
        if($u->cv == null){
            $cv = $u->cv()->create(['name'=> $u->name, 'email'=> $u->email]);
            return $cv;
        }else{
            return $u->cv;
        }
    }
}
