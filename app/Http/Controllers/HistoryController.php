<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Validator;
use Redirect;
use File;
use URL;

class HistoryController extends Controller
{
    // get all history list
    public function index(){
    	$history = History::all();
        return view('backend.pages.history.histories',['history'=> $history]);
    }

    // add history
    public function add_temple_history() {
    	return view('backend.pages.history.add-history');
    }

    // save history
    public function save_temple_history_event(Request $request) {
    	$validate = array(
	        'history_title' => 'required',
	        'history_description' => 'required|min:50',
	        'history_photos' => 'image|mimes:jpg,png,jpeg|max:2048',
		);
    	$validatedData = Validator::make($request->all(),$validate);
	    if($validatedData->fails()) {
	      return redirect::back()->withErrors($validatedData);
	    }else{
	    	// history insert array 
			$history_array = array();
			$history_array['history_title'] = $request->event_title;
			$history_array['history_description'] = $request->event_description;
			
	    	if($request->history_photos){
	    		$path = public_path('upload');
		    	if(!File::isDirectory($path)){
		    		// create directory if folder not exist
			        File::makeDirectory($path, 0777, true, true);

			    }
			    $imageName = time().'.'.$request->history_photos->getClientOriginalExtension();
				$request->history_photos->move(public_path('/upload'), $imageName);
				$history_array['photos'] = URL::to('/public/upload').'/'.$imageName;
	    	}
	    	$history_array['created_at'] = date('Y-m-d H:i:s');	
	    	History::insert($history_array);
	    	session()->flash('success','success');
    		session()->flash('message',__('messages.add_history_success'));
    		return redirect('/events');
	    }
	}
}
