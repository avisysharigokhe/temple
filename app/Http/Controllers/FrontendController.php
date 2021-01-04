<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function contact_us(){
        return view('frontend.pages.contact_us');
    }

    public function history(){
        return view('frontend.pages.history');
    }

    public function near_by_place(){
        return view('frontend.pages.near_by_place');
    }
    public function newses(){
        return view('frontend.pages.newses');
    }
    public function event_media(){
        return view('frontend.pages.event_media');
    }
    public function about_temple(){
        return view('frontend.pages.about_temple');
    }
    public function about_vpdh(){
        return view('frontend.pages.about_vpdh');
    }
}
