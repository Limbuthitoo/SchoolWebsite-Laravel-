<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = School::first();
        return view('backend.school.index', compact('school'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school = new School();
        $school->name = $request->name;
        $school->address = $request->address;
        $school->email = $request->email;
        $school->contact = $request->contact;
        $school->twitter = $request->twitter;
        $school->facebook = $request->facebook;
        $school->instagram = $request->instagram;
        $school->linkedin = $request->linkedin;
        $school->skype = $request->skype;
        if($request->hasFile('logo')){
            $file = $request->logo;
            $newName = time() . $file-> getClientOriginalName();
            $file->move('images',$newName);
            $school -> logo = "images/$newName";
        }
        $school->save();
        return redirect('/school');
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
        $school = School::find($id);
        return view('backend.school.edit',compact('school'));
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
        $school = School::find($id);
        $school->name = $request->name;
        $school->address = $request->address;
        $school->email = $request->email;
        $school->contact = $request->contact;
        $school->twitter = $request->twitter;
        $school->facebook = $request->facebook;
        $school->instagram = $request->instagram;
        $school->linkedin = $request->linkedin;
        $school->skype = $request->skype;
        $school->update();
        return redirect('/school');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = School::find($id);
        $school->delete();
        return redirect('/school');
    }
}
