<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class DashbordController extends Controller
{
	function dashbord(){
		return view('layout.dashbord');
	}
}
