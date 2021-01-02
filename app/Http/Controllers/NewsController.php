<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Validator;
use Redirect;
use File;
use URL;

class NewsController extends Controller
{
    /* Admin news Login Page */
   public function index() {
   		if(!\Auth::check()){
   			return redirect('/login');
   		}
   		$news = News::all();
   		return view('backend.pages.news.news',['news'=> $news]);
   }


   // add news
    public function add_news() {
    	return view('backend.pages.news.add-news');
    }

    // save news
    public function save_news(Request $request) {
    	$validate = array(
	        'news_title' => 'required',
	        'news_description' => 'required|min:50',
	        'news_photo' => 'image|mimes:jpg,png,jpeg|max:2048',
	        'news_date'  => 'required',
		);
    	$validatedData = Validator::make($request->all(),$validate);
	    if($validatedData->fails()) {
	      return redirect::back()->withErrors($validatedData);
	    }else{
	    	// news insert array 
			$news_array = array();
			$news_array['name'] = $request->news_title;
			$news_array['description'] = $request->news_description;
			$news_array['date'] = $request->news_date;
			$news_array['status'] = 'active';
	    	if($request->news_photo){
	    		$path = public_path('upload');
		    	if(!File::isDirectory($path)){
		    		// create directory if folder not exist
			        File::makeDirectory($path, 0777, true, true);

			    }
			    $imageName = time().'.'.$request->news_photo->getClientOriginalExtension();
				$request->news_photo->move(public_path('/upload'), $imageName);
				$news_array['photo'] = URL::to('/public/upload').'/'.$imageName;
	    	}
	    	$news_array['created_at'] = date('Y-m-d H:i:s');	
	    	News::insert($news_array);
	    	session()->flash('success','success');
    		session()->flash('message',__('messages.add_news_success'));
    		return redirect('/news');
	    }
	}

	// update news
	public function update_news_status(Request $request) {
		$News = News::find($request['id']);
		$News->status = ($request['status'] == 'active') ? 'inactive' : 'active';
		$News->save();
		session()->flash('success','success');
    	session()->flash('message',__('messages.update_news_success'));
    	return response()->json(['success' => 'true'], 200);
	}
	// delete news
	public function delete_news(Request $request) {
		$News = News::find($request['id']);
		$news_image_url = $News->photo;
		$news_image_array = explode('/', $news_image_url);
		@unlink(public_path('/upload').'/'.end($news_image_array));
		
		$News->delete();
		session()->flash('success','success');
    	session()->flash('message',__('messages.delete_news_success'));
    	return response()->json(['success' => 'true'], 200);
	}

	// update news
	public function update_news(Request $request){
		$validate = array(
	        'news_title' => 'required',
	        'news_description' => 'required|min:50',
	        'news_photo' => 'image|mimes:jpg,png,jpeg|max:2048',
	        'news_date'  => 'required',
		);
    	$validatedData = Validator::make($request->all(),$validate);
	    if($validatedData->fails()) {
	      return redirect::back()->withErrors($validatedData);
	    }else{
	    	$news  = News::find($request->news_id);
	    	$news->name = $request->news_title;
	    	$news->description = $request->news_description;
	    	$news->date = $request->news_date;
	    	if($request->news_photo){

	    		// delete previous photo
	    		$old_photo_url = $news->photo;
				$old_photo_array = explode('/', $old_photo_url);
				@unlink(public_path('/upload').'/'.end($old_photo_array));

	    		// upload new image
	    		$path = public_path('upload');
		    	if(!File::isDirectory($path)){
		    		// create directory if folder not exist
			        File::makeDirectory($path, 0777, true, true);
			    }
			    $imageName = time().'.'.$request->news_photo->getClientOriginalExtension();
				$request->news_photo->move(public_path('/upload'), $imageName);
				$news->photo = URL::to('/public/upload').'/'.$imageName;
	    	}

	    	$news->updated_at = date('Y-m-d H:i:s');	
	    	$news->save();
	    	session()->flash('success','success');
	    	session()->flash('message',__('messages.update_news_success'));
	    	return redirect('/news');
	    }	
	}

}
