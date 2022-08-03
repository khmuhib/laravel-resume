<?php

namespace App\Http\Controllers\Admin;

use App\Models\Header;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderRequest;
use Illuminate\Support\Facades\File;

class HomeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = Header::all();
        return view('admin.header.show', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.header.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeaderRequest $request)
    {
        $header = new Header;
        $header->name = $request->name;
        $header->skill_01 = $request->skill_01;
        $header->skill_02 = $request->skill_02;
        $header->skill_03 = $request->skill_03;
        $header->skill_04 = $request->skill_04;
        $header->skill_05 = $request->skill_05;
        if($request->hasfile('bg_img'))
        {
            $file = $request->file('bg_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().rand(1000, 9999).'.'.$extention;
            $file->move('uploads/admin/header/img', $filename);
            $header->bg_img = $filename;
        }
        if($request->hasfile('profile_img'))
        {
            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().rand(1000, 9999).'.'.$extention;
            $file->move('uploads/admin/header/img', $filename);
            $header->profile_img = $filename;
        }
        $header->save();
        return redirect()->back()->with('message','Header Data Added Successfully');

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
        $header = Header::find($id);
        return view('admin.header.edit', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HeaderRequest $request, $id)
    {
        $header = Header::find($id);
        $header->name = $request->name;
        $header->skill_01 = $request->skill_01;
        $header->skill_02 = $request->skill_02;
        $header->skill_03 = $request->skill_03;
        $header->skill_04 = $request->skill_04;
        $header->skill_05 = $request->skill_05;
        if($request->hasfile('bg_img'))
        {
            $destination = 'uploads/admin/header/img/'.$header->bg_img;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('bg_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().rand(1000, 9999).'.'.$extention;
            $file->move('uploads/admin/header/img', $filename);
            $header->bg_img = $filename;
        }
        if($request->hasfile('profile_img'))
        {
            $destination = 'uploads/admin/header/img/'.$header->profile_img;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().rand(1000, 9999).'.'.$extention;
            $file->move('uploads/admin/header/img', $filename);
            $header->profile_img = $filename;
        }
        $header->update();
        return redirect()->back()->with('message','Header Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header = Header::find($id);
        $destinationImg_profile = 'uploads/admin/header/img/'.$header->profile_img;
        $destinationImg_bg = 'uploads/admin/header/img/'.$header->bg_img;
        if(File::exists($destinationImg_profile)){
            File::delete($destinationImg_profile);
        }
        if(File::exists($destinationImg_bg)){
            File::delete($destinationImg_bg);
        }
        $header->delete();
        return redirect()->back()->with('message','Header Data Deleted Successfully');
    }
}
