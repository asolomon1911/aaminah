<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonFrontendController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function allyDifference()
    {
        return view('frontend.the-ally-difference');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function career()
    {
        return view('frontend.career');
    }
}
