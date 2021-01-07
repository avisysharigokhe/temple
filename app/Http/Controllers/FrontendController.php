<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Event;
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
        $event_media_list = Event::all();
        return view('frontend.pages.event_media',['event_media_list'=>$event_media_list]);
    }
    public function about_temple(){
        // Select about Us temple record from about_Us table
        $about_us_tample_list= AboutUs::where('about_type', 'temple')->get();
        return view('frontend.pages.about_temple',['about_us_list'=>$about_us_tample_list]);
    }
    public function about_vpdh(){
        // Select about Us Vidyapti record from about_Us table
        $about_us_vidyapati_list= AboutUs::where('about_type', 'vidyapati')->get();
        return view('frontend.pages.about_vpdh',['about_us_list'=>$about_us_vidyapati_list]);
    }
    public function about_ugna(){
         // Select about Us Ugna record from about_Us table
         $about_us_ugna_list= AboutUs::where('about_type', 'ugna')->get();
        return view('frontend.pages.about_ugna',['about_us_list'=>$about_us_ugna_list]);
    }
}
