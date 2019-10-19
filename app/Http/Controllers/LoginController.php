<?php

namespace App\Http\Controllers;
use App\user_model;
use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
	// loads login page
	function login(){
		$exist_admin =  DB::table('users')->where('status', 0)->first();
		return view('login')->with(['exist_admin' => $exist_admin]);
	}

	// load supper admin register page 
	function register_supper_admin(){
		return view('register_supper_admin');
	}

	// insert Supper admin for the first user in MIS
	function add_supper_admin(Request $request){
		if($request->input('password') == $request->input('coonPassword')){
			$is_admin =  DB::table('users')->where('status', 0)->first();
			if(empty($is_admin)){
		        $users = new user_model();
		        $users->name = $request->input('name');
		        $users->user_name = $request->input('username');
		        $users->password = md5($request->input('password'));
		        $users->status = 0;
		        $users->phone = $request->input('phone');
		        $users->email = $request->input('email');
	        	$users->save();
	        	return redirect('/')->with('success', 'Successfully registerd!');
	        }
	        else{
	        	return redirect('register_supper_admin')->with('error', 'Supper Admin Already Exist !');	
	        }
        }
        else {
        	return redirect('register_supper_admin')->with('error', 'Password Dose Not Match');
        }
	}

	// login function 
	function check_auth(Request $request){
		$is_exist =  DB::table('users')->where('user_name', $request->input('username'))->where('password', md5($request->input('password')))->first();
		if ($is_exist) {
			Session(
				[
					'user_id' => $is_exist->id,
					'username' => $is_exist->name,
					'status' => $is_exist->status,
					'dep_id' => $is_exist->dep_id
				]);
			return redirect('dashbord');
		}
		else {
			return redirect('/')->with('error', 'Username Or Password is incorrect!');
		}
	}
}
