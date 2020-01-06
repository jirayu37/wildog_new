<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\information;
use App\User;
use Illuminate\Support\Facades\DB;

class AnalyzeController extends Controller
{
     public function index()
    {

        $information = information::select(\DB::raw("salary as count"))
                    ->groupBy(\DB::raw("salary"))
                    ->pluck('count');

        // $user = User::select(\DB::raw("SUM(id) as count"))
        //             ->groupBy(\DB::raw("id"))
        //             ->pluck('count');


            $user = information::select(\DB::raw("user_id as count"))
                    ->groupBy(\DB::raw("user_id"))
                    ->pluck('count');


//        $user = DB::select('select u_id from information ');


     // dd($information);
       // $costomer = DB::table('users')

                    // $users = DB::table('users')
                    //  ->select(DB::raw('count(*) as user_count, status'))
                    //  ->where('status', '<>', 1)
                    //  ->groupBy('status')
                    //  ->get();

      //  dd($user);
    // 	$users = User::select(\DB::raw("COUNT(*) as count"))
    //                 ->whereYear('created_at', date('Y'))
    //                 ->groupBy(\DB::raw("Month(created_at)"))
    //                 ->pluck('count');

    // $viewer = information::all(); 



       //  dd($users);
     
     //    //return view('admin.analyze');



    // 	 $viewer = information::select(DB::raw("SUM(u_id) as count"))
    //     ->orderBy("created_at")
    //     ->groupBy(DB::raw("year(created_at)"))
    //     ->get()->toArray();
    // $viewer = array_column($viewer, 'count');


    //dd($viewer);


     // $result = \DB::table('information')
     //                ->orderBy('u_id', 'ASC')
     //                ->get();



       //return response()->json($result);

    
    	return view('admin.analyze', compact('user' , 'information'));
    // $click = Click::select(DB::raw("SUM(numberofclick) as count"))
    //     ->orderBy("created_at")
    //     ->groupBy(DB::raw("year(created_at)"))
    //     ->get()->toArray();
    // $click = array_column($click, 'count');
    

    // return view('admin.analyze')
    //         ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))
    //         ->with('click',json_encode($click,JSON_NUMERIC_CHECK));

    }
}
