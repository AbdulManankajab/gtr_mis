<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{

	function user_list(){
		$users = DB::table('users')->get();
		return view('users.user_list', ['users' => $users]);
	}
}
