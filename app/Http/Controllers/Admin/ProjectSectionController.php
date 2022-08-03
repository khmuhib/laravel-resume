<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProjectRequest;
use Termwind\Components\Dd;

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
        $categories = ProjectCategory::all();
        return view('admin.project.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $project = new Project;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->category_id = $request->category;
        $project->client = $request->client;
        $project->project_date = $request->project_date;
        $project->project_url = $request->project_url;
        if($request->hasfile('img_01'))
        {
            $file = $request->file('img_01');
            $extention = $file->getClientOriginalExtension();
            $filename = time().rand(1000, 9999).'.'.$extention;
            $file->move('uploads/admin/project/img', $filename);
            $project->img_01 = $filename;
        }
        if($request->hasfile('img_02'))
        {
            $file = $request->file('img_02');
            $extention = $file->getClientOriginalExtension();
            $filename = time().rand(1000, 9999).'.'.$extention;
            $file->move('uploads/admin/project/img', $filename);
            $project->img_02 = $filename;
        }
        if($request->hasfile('img_03'))
        {
            $file = $request->file('img_03');
            $extention = $file->getClientOriginalExtension();
            $filename = time().rand(1000, 9999).'.'.$extention;
            $file->move('uploads/admin/project/img', $filename);
            $project->img_03 = $filename;
        }
        $project->save();
        return redirect()->route('admin.project.show')->with('message', 'Project created successfully');
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
        $categories = ProjectCategory::all();
        return view('admin.project.edit', compact('project', 'categories'));
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
        //dd($request->all());
        $project = Project::find($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->category_id = $request->category;
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
            $filename = time().rand(1000, 9999).'.'.$extention;
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
            $filename = time().rand(1000, 9999).'.'.$extention;
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
            $filename = time().rand(1000, 9999).'.'.$extention;
            $file->move('uploads/admin/project/img', $filename);
            $project->img_03 = $filename;
        }
        $project->save();
        return redirect()->route('admin.project.show')->with('message', 'Project created successfully');


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

        $destinationImg01 = 'uploads/admin/project/img/'.$project->img_01;
        $destinationImg02 = 'uploads/admin/project/img/'.$project->img_02;
        $destinationImg03 = 'uploads/admin/project/img/'.$project->img_03;

        if(File::exists($destinationImg01)){
            File::delete($destinationImg01);
        }
        if(File::exists($destinationImg02)){
            File::delete($destinationImg02);
        }
        if(File::exists($destinationImg03)){
            File::delete($destinationImg03);
        }
        $project->delete();
        return redirect()->route('admin.project.show')->with('message', 'Project deleted successfully');
    }
}
