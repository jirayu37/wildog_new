<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\information;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Mail\CreateCustomer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costomer = User::all();
        $id = Auth::id();

       // $lisr_db = User::where('id' ==  $id);
        //dd($lisr_db);
        // print($lisr_db);
       $costomer = DB::table('users')->where('id', $id)->first();

        //$id= Auth::user()->firstname;
        //dd($user);
        return response()->json($costomer);
        // print($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          // dd('dddd');
        return view('admin.customer.create');
        //dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd('store_customer');
           $this->validate($request,[
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

            $firstname = $request->firstname;
            $lastname = $request->lastname;
            $phone = $request->phone;
            $email = $request->email;
            $address = $request->address;
            $password = $request->password;
           // 'type' => User::DEFAULT_TYPE,
            User::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'phone' => $phone,
            'email' => $email,
            'address' => $address,
            'password' => bcrypt($password),
            'type' => User::DEFAULT_TYPE,
            ]);


            $pro_id = DB::getPdo()->lastInsertId();
            //dd($pro_id);
            // $user = DB::table('users')->where('id', $pro_id)->first();
            $user = User::find($pro_id);
            //dd($user->email);          




            Mail::to($user->email)->send(new CreateCustomer($user));



            return redirect('admin/dashboard');
           // return redirect()->route('admin.dashboard');
           //dd($firstname);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
          $users = DB::table('users')
            ->join('information', 'users.id', '=', 'information.user_id')
            ->select('users.*', 'information.i_phone', 'information.salary' , 'information.workplace')
            ->where('user_id', '=', $id)
            ->get();



            return view('admin.edit' , compact('id' , 'users'));            
            //dd($users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = User::findOrFail($id);
        $show->delete();

        DB::table('information')->where('user_id', '=', $id)->delete();

        return redirect('admin/dashboard')->with('success', 'Show is successfully deleted');
    }
}
