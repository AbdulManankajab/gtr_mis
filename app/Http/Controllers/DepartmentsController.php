<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DepartmentsController extends Controller
{
    function departments(Request $request){
		if (empty($request->all())) {
			$department = DB::table('department')->get();
			return view('departments.departments', ['department' => $department]);
		}
	}
}
