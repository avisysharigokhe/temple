<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Validator;
use Redirect;
use File;
use URL;
class EventController extends Controller
{
	// get all event list
    public function index(){
    	$events = Event::all();
        return view('backend.pages.events',['events'=> $events]);
    }

    // add event
    public function add_event() {
    	return view('backend.pages.add-event');
    }

    // save event
    public function save_event(Request $request) {
    	$validate = array(
	        'event_title' => 'required',
	        'event_description' => 'required|min:50',
	        'event_photo' => 'image|mimes:jpg,png,jpeg|max:2048',
	        'event_date'  => 'required',
		);
    	$validatedData = Validator::make($request->all(),$validate);
	    if($validatedData->fails()) {
	      return redirect::back()->withErrors($validatedData);
	    }else{
	    	// event insert array 
			$event_array = array();
			$event_array['name'] = $request->event_title;
			$event_array['description'] = $request->event_description;
			$event_array['date'] = $request->event_date;
			$event_array['status'] = 'active';
	    	if($request->event_photo){
	    		$path = public_path('upload');
		    	if(!File::isDirectory($path)){
		    		// create directory if folder not exist
			        File::makeDirectory($path, 0777, true, true);

			    }
			    $imageName = time().'.'.$request->event_photo->getClientOriginalExtension();
				$request->event_photo->move(public_path('/upload'), $imageName);
				$event_array['photo'] = URL::to('/public/upload').'/'.$imageName;
	    	}
	    	$event_array['created_at'] = date('Y-m-d H:i:s');	
	    	Event::insert($event_array);
	    	session()->flash('success','success');
    		session()->flash('message',__('messages.add_event_success'));
    		return redirect('/events');
	    }
	}    	
 }
