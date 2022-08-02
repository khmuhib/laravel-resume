<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProjectRequest;

class ProjectSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        //dd($request->all());

        $project = new Project;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->category = $request->category;
        $project->client = $request->client;
        $project->project_date = $request->project_date;
        $project->project_url = $request->project_url;
        
        if($request->hasfile('img_01'))
        {
            $file = $request->file('img_01');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/admin/project/img', $filename);
            $project->img_01 = $filename;
        }
        
        if($request->hasfile('img_02'))
        {
            $file = $request->file('img_02');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/admin/project/img', $filename);
            $project->img_02 = $filename;
        }
        
        if($request->hasfile('img_03'))
        {
            $file = $request->file('img_03');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/admin/project/img', $filename);
            $project->img_03 = $filename;
        }
        $project->save();
        return redirect()->back()->with('message', 'Project created successfully');

        

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
        $project = Project::find($id);
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        $project = Project::find($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->category = $request->category;
        $project->client = $request->client;
        $project->project_date = $request->project_date;
        $project->project_url = $request->project_url;

        if($request->hasfile('img_01'))
        {
            $destination = 'uploads/admin/project/img/'.$project->img_01;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('img_01');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/admin/project/img', $filename);
            $project->img_01 = $filename;
        }

        if($request->hasfile('img_02'))
        {
            $destination = 'uploads/admin/project/img/'.$project->img_02;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('img_02');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/admin/project/img', $filename);
            $project->img_02 = $filename;
        }

        if($request->hasfile('img_03'))
        {
            $destination = 'uploads/admin/project/img/'.$project->img_03;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('img_03');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/admin/project/img', $filename);
            $project->img_03 = $filename;
        }

        $project->update();
        return redirect()->back()->with('message', 'Project updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->back()->with('message', 'Project deleted successfully');

    }
}
