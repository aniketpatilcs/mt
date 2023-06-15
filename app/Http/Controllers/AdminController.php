<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Mail;
  use App\Models\data_record;
class AdminController extends Controller
{

	public function index()
	{
	    if (Session::has('admin_name')){
			return redirect("/admin/dashboard");
	    }else{
			return view ('admin/index');
		} 
	}
	public function admin_login(Request $request)
	{
		$uname = $request->uname ;
		$pass = $request->pass ;
        $users = DB::select("select count(id) as cid from admin_login where uname='$uname' and pass='$pass'");

          $count = $users[0]->cid ;
        
		if($count!='0'){
			Session::put('admin_name', $uname);
			$request->session()->flash('message', 'login was successful!');
			return redirect("/admin/");
		}else{
			$request->session()->flash('message', 'Wrong username or password!');
			return redirect("/admin/");
		}
		echo Session::get('admin_name');
	}
	 
	public function dashboard()
	{
	   return view("/admin/dashboard");
	}
	 
	 
	 
	
 
	
	 public function view_record()
	{
		 if (Session::has('admin_name')){
			 $data=data_record::all();
			 //$countdata = $data[0]->cid ;   
			 return view ('admin/view_record',['var'=>$data]);
		 }else{
			return redirect("/admin/");
		}
	} 
	
	 
	 
	public function logout()
	{
    	Session::forget('admin_name');
		return redirect("/admin/");
	}
	 
	
	 
	
	
	 
 
     
 	
	 
}
