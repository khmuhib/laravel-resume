<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        $about = new About;
        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->short_description = $request->short_description;
        $about->birth = $request->birth;
        $about->link = $request->link;
        $about->degree = $request->degree;
        $about->phone = $request->phone;
        $about->email = $request->email;
        $about->city = $request->city;
        $about->freelance = $request->freelance;
        $about->long_description = $request->long_description;
        $about->save();
        return redirect()->back()->with('message','About Data Added Successfully');
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
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
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
        $about = About::find($id);
        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->short_description = $request->short_description;
        $about->birth = $request->birth;
        $about->link = $request->link;
        $about->degree = $request->degree;
        $about->phone = $request->phone;
        $about->email = $request->email;
        $about->city = $request->city;
        $about->freelance = $request->freelance;
        $about->long_description = $request->long_description;
        $about->update();
        return redirect()->back()->with('message','About Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect()->back()->with('message','About Data Deleted Successfully');
    }
}
