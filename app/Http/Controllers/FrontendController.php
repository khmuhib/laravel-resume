<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Header;
use App\Models\Social;
use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all()->first();
        $socials = Social::all();
        $about = About::all()->first();
        $skills = Skill::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $categories = ProjectCategory::all();
        $projects = Project::all();
        return view('frontend.index' , compact('header', 'socials', 'about', 'skills', 'educations', 'experiences', 'categories', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $header = Header::all()->first();
        $project = Project::find($id);
        $socials = Social::all();
        return view('frontend.portfolio', compact('project', 'header', 'socials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
