<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $school = School::first();
        return view('frontend.pages.home',compact("school"));
    }

    public function about()
    {
        $school = School::first();
        return view('frontend.pages.about',compact("school"));
    }

    public function course()
    {
        $school = School::first();
        return view('frontend.pages.course',compact("school"));
    }

    public function teacher()
    {
        $school = School::first();
        return view('frontend.pages.teacher',compact("school"));
    }

    public function event()
    {
        $school = School::first();
        return view('frontend.pages.event',compact("school"));
    }

    public function contact()
    {
        $school = School::first();
        return view('frontend.pages.contact',compact("school"));
    }

    public function coursedetail()
    {
        $school = School::first();
        return view('frontend.pages.coursedetail',compact("school"));
    }
}
