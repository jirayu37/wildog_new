<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\information;
use App\User;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\DB;

use App\Mail\OrderShipped2;
use App\Mail\updatedata;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //dd($id);
        //return view('admin.informations.create');
       // $check = information::find($id);

          $check = DB::table('information')->where('user_id', $id)->first();
         // dd($check);

           return view('create' , compact('id' , 'check'));
        //return view('admin.informations.create' , compact('id' , 'check'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




       // dd($request);
          $this->validate($request,[

            'i_phone' => 'required|max:255',
            'workplace' => 'required|max:100',
            'address' => 'required|max:200000',
            'salary' => 'required|max:200000',
            'image' => 'required|max:200000'
        ]);


        
          // Mail::send(['text' => 'mail'] , ['name', 'Sarthak'] , function($message){
          //   $message->to('theboat72@gmail.com' , 'To Biterer')->subject('Test Email');
          //   $message->form('theboat72@gmail.com' , 'To Biterer');
          // });
            $user_id = $request->user_id;
            $i_phone =  $request->i_phone;
            $workplace =  $request->workplace;
            $address =  $request->address;
            $salary =  $request->salary;
            $image =  $request->image;


              // Mail::to('theboat72@gmail.com')->send(new OrderShipped);

           //dd($image);
         

            if ($image) {
              //  dd('dddd2222');
                 $information = information::create($request->all());
                

                 $information->update(['image' => $request->file('image')->store('profile')]);
               // $path = $request->file('avatar')->storeAs('avatars', $request->user()->id);


                // $file = $request->file('image')->store('profile');
                // dd('dwww');
               

                // $user = User::find($user_id)->information;
                 $user = User::find($user_id);

                 // dd($user);
               // $user = DB::table('users');
            // ->join('information', 'users.id', '=', 'information.u_id')
            // ->select('users.*', 'information.i_phone', 'information.salary' , 'information.workplace', 'information.address')
            // ->get();



               //  $costomer = DB::table('users')->where('id', $id)->first();
              //  $id = $u_id->id;

                //dd($id);
                Mail::to('theboat72@gmail.com')->send(new OrderShipped2($user));
              //  Mail::to($contact['email'])->send(new ContactEmail($contact));
                 return redirect('/home');

            }else{
  dd('else');
            }

            

          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $customers = information::all();
         dd($customers);
           return view('admin.dashboard' , compact('customers'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //   dd($id);
        //   $memberid = Member::find($id);
        // return view('edit' , compact('id'));
        return view('admin.informations.edit' , compact('id'));

       //return view('edit' , compact('id'));
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
      //  dd('update----ddd');

        $this->validate($request, [
                'firstname' => 'required|string|max:150',
                'lastname' => 'required|string',
                'phone' => 'required|string',
                'address' => 'required|string',
                // 'i_phone' => 'required|string',
                // 'workplace' => 'required|string',
                // 'address2' => 'required|string',
                // 'salary' => 'required|string',

        ]);





          // $customers = information::all();


        $user = User::findOrFail($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();

       
        // $infors = information::findOrFail($id);
        // $infors->user_id = $request->input('user_id');
        // $infors->i_phone = $request->input('i_phone');
        // $infors->workplace = $request->input('workplace');
        // $infors->salary = $request->input('salary');
        // $infors->address = $request->input('address2');
        // $infors->save();

        // $employee = Employee::find($request->input('id'));
        // $employee->firstname = $request->input('firstname');
        // $employee->lastname = $request->input('lastname');
        // $employee->department = $request->input('department');
        // $employee->phone = $request->input('phone');
        // $employee->save(); //persist the data





        //  $validatedData = $request->validate([
        //          'i_phone' => 'required|max:255',
        //     'workplace' => 'required|max:255',
        //     'address2' => 'required|numeric',
        //     'salary' => 'required|max:255',
        // ]);

         //dd($validatedData);
       // information::whereId($id)->update($validatedData);

       // return redirect('/shows')->with('success', 'Show is successfully updated');







        $users = User::all();

        $test = DB::table('users')
            ->join('information', 'users.id', '=', 'information.user_id')
            ->select('users.*', 'information.i_phone', 'information.salary' , 'information.workplace', 'information.address')
            ->get();



           return view('admin.dashboard' , compact('customers' , 'users' ,'test'));
        //return view('admin/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
