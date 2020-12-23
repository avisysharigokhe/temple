<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AdminController extends Controller
{
	/* Admin Login Page */
   public function login() {
   		return view('backend.pages.login');
   }

	/* Admin Dashboard page */ 
   public function dashboard() {
   		return view('backend.pages.homepage');
   }		

   /* Admin Fogot Password page */ 
   public function forgot_password() {
   		return view('backend.pages.forgot-password');
   }

}