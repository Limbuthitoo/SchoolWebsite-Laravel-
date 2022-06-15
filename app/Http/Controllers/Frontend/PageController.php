<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function course()
    {
        return view('frontend.pages.course');
    }

    public function teacher()
    {
        return view('frontend.pages.teacher');
    }

    public function event()
    {
        return view('frontend.pages.event');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function coursedetail()
    {
        return view('frontend.pages.coursedetail');
    }
}
