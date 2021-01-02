<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App;
use Validator;
use Redirect;
use File;
use URL;
class AboutController extends Controller
{
    // about vidyapati temple
    public function about_vidyapati() {
    	if(!\Auth::check()){
   			return redirect('/login');
   		}
   		$about_us = AboutUs::where('about_type','vidyapati')->get();
   		$title = "Vidyapati";
   		return view('backend.pages.aboutus.about-vidyapati',['about_us'=> $about_us,'title' => $title]);
    }

    // add about vidyapati
    public function add_about_vidyapati() {
    	if(!\Auth::check()){
   			return redirect('/login');
   		}
   		$title = "Vidyapati";
   		return view('backend.pages.aboutus.add-about-vidyapati',['title' => $title]);
    }

    //  save about vidyapati
    public function save_about_vidyapati(Request $request) {
    	$validate = array(
	        'about_title' => 'required',
	        'about_description' => 'required|min:50',
	        'about_photo' => 'image|mimes:jpg,png,jpeg|max:2048',
		);
    	$validatedData = Validator::make($request->all(),$validate);
	    if($validatedData->fails()) {
	      return redirect::back()->withErrors($validatedData);
	    }else{
	    	// about vidyapati insert array 
			$about_array = array();
			$about_array['about_title'] = $request->about_title;
			$about_array['about_description'] = $request->about_description;
			$about_array['about_type'] = 'vidyapati';
			$about_array['status'] = 'active';
	    	if($request->about_photo){
	    		$path = public_path('upload');
		    	if(!File::isDirectory($path)){
		    		// create directory if folder not exist
			        File::makeDirectory($path, 0777, true, true);

			    }
			    $imageName = time().'.'.$request->about_photo->getClientOriginalExtension();
				$request->about_photo->move(public_path('/upload'), $imageName);
				$about_array['about_photos'] = URL::to('/public/upload').'/'.$imageName;
	    	}
	    	$about_array['created_at'] = date('Y-m-d H:i:s');	
	    	AboutUs::insert($about_array);
	    	session()->flash('success','success');
    		session()->flash('message',__('messages.add_about_vidyapati_success'));
    		return redirect('/about_vidyapati');
	    }
    }

    // delete about us vidyapati
	public function delete_about_vidyapati_description(Request $request) {
		$AboutUs = AboutUs::find($request['id']);
		$about_vidyapati_image_url = $AboutUs->about_photos;
		$image_image_array = explode('/', $about_vidyapati_image_url);
		@unlink(public_path('/upload').'/'.end($image_image_array));
		
		$AboutUs->delete();
		session()->flash('success','success');
    	session()->flash('message',__('messages.delete_about_vidyapati_success'));
    	return response()->json(['success' => 'true'], 200);
	}


	// update about vidyapati
	public function update_about_vidyapati(Request $request){
		$validate = array(
	        'about_title' => 'required',
	        'about_description' => 'required|min:50',
	        'news_photos' => 'image|mimes:jpg,png,jpeg|max:2048',
		);
    	$validatedData = Validator::make($request->all(),$validate);
	    if($validatedData->fails()) {
	      return redirect::back()->withErrors($validatedData);
	    }else{
	    	$about  = AboutUs::find($request->about_id);
	    	$about->about_title	 = $request->about_title;
	    	$about->about_description = $request->about_description;
	    	if($request->about_photos){

	    		// delete previous photo
	    		$old_photo_url = $about->about_photos;
				$old_photo_array = explode('/', $old_photo_url);
				@unlink(public_path('/upload').'/'.end($old_photo_array));

	    		// upload new image
	    		$path = public_path('upload');
		    	if(!File::isDirectory($path)){
		    		// create directory if folder not exist
			        File::makeDirectory($path, 0777, true, true);
			    }
			    $imageName = time().'.'.$request->about_photos->getClientOriginalExtension();
				$request->about_photos->move(public_path('/upload'), $imageName);
				$about->about_photos = URL::to('/public/upload').'/'.$imageName;
	    	}

	    	$about->updated_at = date('Y-m-d H:i:s');	
	    	$about->save();
	    	session()->flash('success','success');
	    	session()->flash('message',__('messages.update_about_vidyapati_success'));
	    	return redirect('/about_vidyapati');
	    }	
	}



	// about vidyapati temple
    public function about_temple() {
    	if(!\Auth::check()){
   			return redirect('/login');
   		}
   		$about_us = AboutUs::where('about_type','temple')->get();
   		$title = "Temple";
   		return view('backend.pages.aboutus.about-temple',['about_us'=> $about_us,'title' => $title]);
    }

    // add about temple
    public function add_about_temple() {
    	if(!\Auth::check()){
   			return redirect('/login');
   		}
   		$title = "temple";
   		return view('backend.pages.aboutus.add-about-temple',['title' => $title]);
    }

    //  save about temple
    public function save_about_temple(Request $request) {
    	$validate = array(
	        'about_title' => 'required',
	        'about_description' => 'required|min:50',
	        'about_photo' => 'image|mimes:jpg,png,jpeg|max:2048',
		);
    	$validatedData = Validator::make($request->all(),$validate);
	    if($validatedData->fails()) {
	      return redirect::back()->withErrors($validatedData);
	    }else{
	    	// about temple insert array 
			$about_array = array();
			$about_array['about_title'] = $request->about_title;
			$about_array['about_description'] = $request->about_description;
			$about_array['about_type'] = 'temple';
			$about_array['status'] = 'active';
	    	if($request->about_photo){
	    		$path = public_path('upload');
		    	if(!File::isDirectory($path)){
		    		// create directory if folder not exist
			        File::makeDirectory($path, 0777, true, true);

			    }
			    $imageName = time().'.'.$request->about_photo->getClientOriginalExtension();
				$request->about_photo->move(public_path('/upload'), $imageName);
				$about_array['about_photos'] = URL::to('/public/upload').'/'.$imageName;
	    	}
	    	$about_array['created_at'] = date('Y-m-d H:i:s');	
	    	AboutUs::insert($about_array);
	    	session()->flash('success','success');
    		session()->flash('message',__('messages.add_about_temple_success'));
    		return redirect('/about_temple');
	    }
    }

    // delete about us temple
	public function delete_about_temple_description(Request $request) {
		$AboutUs = AboutUs::find($request['id']);
		$about_temple_image_url = $AboutUs->about_photos;
		$image_image_array = explode('/', $about_temple_image_url);
		@unlink(public_path('/upload').'/'.end($image_image_array));
		
		$AboutUs->delete();
		session()->flash('success','success');
    	session()->flash('message',__('messages.delete_about_temple_success'));
    	return response()->json(['success' => 'true'], 200);
	}


	// update about temple
	public function update_about_temple(Request $request){
		$validate = array(
	        'about_title' => 'required',
	        'about_description' => 'required|min:50',
	        'about_photos' => 'image|mimes:jpg,png,jpeg|max:2048',
		);
    	$validatedData = Validator::make($request->all(),$validate);
	    if($validatedData->fails()) {
	      return redirect::back()->withErrors($validatedData);
	    }else{
	    	$about  = AboutUs::find($request->about_id);
	    	$about->about_title = $request->about_title;
	    	$about->about_description = $request->about_description;
	    	if($request->about_photos){

	    		// delete previous photo
	    		$old_photo_url = $about->about_photos;
				$old_photo_array = explode('/', $old_photo_url);
				@unlink(public_path('/upload').'/'.end($old_photo_array));

	    		// upload new image
	    		$path = public_path('upload');
		    	if(!File::isDirectory($path)){
		    		// create directory if folder not exist
			        File::makeDirectory($path, 0777, true, true);
			    }
			    $imageName = time().'.'.$request->about_photos->getClientOriginalExtension();
				$request->about_photos->move(public_path('/upload'), $imageName);
				$about->about_photos = URL::to('/public/upload').'/'.$imageName;
	    	}

	    	$about->updated_at = date('Y-m-d H:i:s');	
	    	$about->save();
	    	session()->flash('success','success');
	    	session()->flash('message',__('messages.update_about_temple_success'));
	    	return redirect('/about_temple');
	    }	
	}


}
