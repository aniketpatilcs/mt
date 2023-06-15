<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Session;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
 		return view ('index');
    }
	
	  public function indexop()
    {
    	$cities = 'hello';
		return view ('indexop');
    }
	
	  
	
}
