<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;

use Session;
use Mail;
  use App\Models\data_record;

 class FrontController extends Controller
{

public function new_de(Request $request)
	{

		      $request->validate([  
            'name'=>'required', 
            'email'=>'required|email|max:33',
            'password'=>'required',
             
              
        ]);  
  
   
 			$name = $request->name ;
 			$email = $request->email ;
			$password = Hash::make($request->password);
		 $users_email = DB::select("select count(id) as cid from data_records where email='$email'  ");
 $count_user = $users_email[0]->cid ;
if($count_user > 0)
{

	        
       			$request->session()->flash('insert_msg', '  Email Already In use   !');

      
			return redirect('/');
		 
}
else
{
	$insert = DB::insert('insert into data_records (name,email,password) values (?, ?, ?)', [$name,$email,$password]);
      if($insert)
      {
       			$request->session()->flash('insert_msg', 'User Regsiter Successfully !');

      }
			return redirect('/');
}
	        
		 
	}
	 
     public function user_login()
	{
	    return view ('/user/index');
	}
 	
 		public function user_login_det(Request $request)
	{
		$uname = $request->uname ;
		$pass = $request->pass ;
        $users = DB::select("select count(id) as cid from data_records where email='$uname' and password='$pass'");
        $userid = DB::select("select id from data_records where email='$uname' and password='$pass'");

          $count = $users[0]->cid ;
        
		if($count!='0'){
			Session::put('user_name', $uname);
			Session::put('user_id', $userid[0]->id);
			$request->session()->flash('message', 'login was successful!');
			return redirect("/user_dashboard/");
		}else{
			$request->session()->flash('message', 'Wrong username or password!');
			return redirect("/ulogin/");
		}
		echo Session::get('user_name');
	}
	 

	public function user_dashboard()
	{
	   return view("/user/dashboard");
	}
		public function logout()
	{
    	Session::forget('user_name');
		return redirect("/ulogin");
	}



 public function view_record()
	{
		 if (Session::has('user_name')){
		 	$uid=Session::get('user_id');
			     $usersdata = DB::select("select * from data_records where id='$uid'  ");
			     // print_r($usersdata);
			 return view ('/user/view_record',['var'=>(array)$usersdata]);

		 }else{
			return redirect("/ulogin");
		}
	} 
 public function user_update()
	{
		 if (Session::has('user_name')){
		 	$uid=Session::get('user_id');
			     $usersdata = DB::select("select * from data_records where id='$uid'  ");
			     // print_r($usersdata);
			 return view ('/user/view_record',['var'=>(array)$usersdata]);

		 }else{
			return redirect("/ulogin");
		}
	} 



public function user_update_data(Request $request)
	{

 if (Session::has('user_name')){
		 	$uid=Session::get('user_id');
		      $request->validate([  
            'name'=>'required', 
             'password'=>'required',
             
              
        ]);  
  
   
 			$name = $request->name ;
 			//$password = Hash::make($request->password);
  			$password = $request->password;

			 
	      

    $update=DB::insert("update data_records  set name='$name',password='$password'   where id='$uid' ");

      if($update)
      {
       			$request->session()->flash('insert_msg', 'User Updated Successfully !');
	return redirect('/user_dashboard');
      }
		
		 
	}
}


   public function user_user_sub()
	{
	    return view ('/user/user_sub');
	}
   public function payment(Request $request)
	{    

		 
		 			$stripeToken = $request->stripeToken ;
		 			$stripeEmail = $request->stripeEmail ;

    $update=DB::insert("update data_records  set stripeToken='$stripeToken'   where email='$stripeEmail' ");
 if($update)
      {
       			$request->session()->flash('insert_msg', '   Payment Successfully !');
 	    return view ('/user/user_sub');
      }
	}

}
