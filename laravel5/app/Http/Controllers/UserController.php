<?php namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
	public function all()
    {
	     $users = DB::table('users')->get();		 
		 return view('user.all', ['users' => $users]);
	} 	
	
	public function user_service()
    {
		 $users = DB::table('users')
            ->leftJoin('user_service', 'users.id', '=', 'user_service.user_id')
			->join('service', 'user_service.service_id', '=', 'service.id')
            ->select('users.name' , 'service.name as service_name', 'service.id as service_id')
            ->get();
		 
		 // clear up some user->name fields
		 $username='';
		 foreach($users as $u){
		     if ($u->name ==  $username)  { 
				 $u->name = ''; 
			 }
			 else { 
				$username = $u->name;
			}
		 }
		 
		 return view('user.withservices', ['users' => $users]);
	}
	public function user_service2()
    {
		 $users = DB::table('users')
            ->leftJoin('user_service', 'users.id', '=', 'user_service.user_id')
			->join('service', 'user_service.service_id', '=', 'service.id')
            ->select('users.name' , 'service.name as service_name', 'service.id as service_id')
            ->get();
		
		 return view('user.withservices2', ['users' => $users]);
	}  
	
	public function user_service3()
    { 
		 $users = DB::table('users')
            ->leftJoin('user_service', 'users.id', '=', 'user_service.user_id')
			->select('users.name', 'user_service.service_id')
            ->get(); 
			
		 return view('user.withservices', ['users' => $users]);
	}
	
	
	public function all2()
    {
	     $users = User::all();		 
		 return view('user.all', ['users' => $users]);
	}
	 
    public function profile($user=2)
    {
        $user = User::find($user); 		
		//$services= array();
		
        return view('user.profile', ['user' => $user ]);
    }
}
