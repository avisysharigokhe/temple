<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
	public function __construct() {

	}
	/* Admin Login Page */
   public function login() {
   		if(!\Auth::check()){
   			return view('backend.pages.login');
   		}
   		
   }

	/* Admin Dashboard page */ 
   public function dashboard() {

   		if(\Auth::check()){
   			return view('backend.pages.homepage');
   		}
   		return redirect('/login');
   }		

   /* Admin Fogot Password page */ 
   public function forgot_password() {
   		if(\Auth::check()){
   			return redirect('/dashboard');
   		}
   		return view('backend.pages.forgot-password');
   }

   /* Admin Login Submit */ 
   public function submit_login(Request $request) {
   		//echo Hash::make('vidyapti@2020!');
   		$credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            session()->flash('status','success');
    		session()->flash('message',__('Login successfully'));
            return redirect('/dashboard');
        }
        session()->flash('status','danger');
    	session()->flash('message',__('Invalid email or password'));
		return redirect('/login');
   		
   }

   /* Admin Forgot Password Submit */ 
   public function submit_forgot_password(Request $request) {
   		$user = User::where('email',$request->email)->first();
   		if(!empty($user)) {
   			$user->password = Hash::make($request->password);
   			$user->save();
   			session()->flash('success','success');
    		session()->flash('message',__('password changed successfully'));
    		return redirect('/forgot-password');
   		} else {
   			session()->flash('danger','danger');
    		session()->flash('message',__('Invalid email'));
    		return redirect('/forgot-password');
   		}
   		
   }

   /* Admin Logout Page */
   public function logout() {
   		Auth::logout();
   		session_unset();
   		return redirect('/login');
   }

}