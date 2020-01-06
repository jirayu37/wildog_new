<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\User;
use App\information;


use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
	{

		$users = User::all();

	    $test = DB::table('users')
            ->join('information', 'users.id', '=', 'information.user_id')
            ->select('users.*', 'information.i_phone', 'information.salary' , 'information.workplace', 'information.address' , 'information.user_id' , 'information.image')
            ->get();

          
           // dd($test);
        // $check = User::find(5)->information;
      		

		  //    return view('admin.dashboard' , compact('customers'));
    	return view('admin/dashboard' , compact('users' , 'test'));
	}

	 public function update(Request $request, $id)
    {
        dd('update');
    }
}
