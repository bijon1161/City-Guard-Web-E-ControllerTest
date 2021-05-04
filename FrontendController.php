<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function aboutus()
    {
        return view('frontend\about');
    }
    public function casestudy()
    {
        return view('frontend\casestudy');
    }
    public function contact()
    {
        return view('frontend\contact');
    }
    public function national()
    {
        return view('frontend\national');
    }
    public function inational()
    {
        return view('frontend\inational');
    }
    public function localadmin()
    {
        return view('frontend\localadmin');
    }
}
