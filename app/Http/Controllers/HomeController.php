<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
            $id = Auth::id();
            
        if(auth()->user()->isAdmin()) {


            $test = DB::table('users')
            ->join('information', 'users.id', '=', 'information.user_id')
            ->select('users.*', 'information.i_phone', 'information.salary' , 'information.workplace', 'information.address' , 'information.image')
            ->get();

              $users = User::all();

              $check = DB::table('information')->where('user_id', $id)->first();
            $costomer = DB::table('users')->where('id', $id)->first();


            return view('admin/dashboard' , compact('costomer' , 'check' , 'test' ,'users'));
        } else {
            

              $test = DB::table('users')
            ->join('information', 'users.id', '=', 'information.user_id')
            ->select('users.*', 'information.i_phone', 'information.salary' , 'information.workplace', 'information.address' , 'information.image')
            ->get();



              $check = DB::table('information')->where('user_id', $id)->first();
            $costomer = DB::table('users')->where('id', $id)->first();

       // dd($costomers);
        // return view('checkout.index' ,compact('IDorder' , 'attr', 'attr2'));
        return view('home' , compact('costomer' , 'check' , 'test'));


           // return view('home');
        }
        //return view('home');
    }
}
