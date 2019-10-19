<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	function departments(Request $request){
		if (empty($request->all())) {
			return view('users.departments');
		}
	}

	function users(){
		
	}
}
