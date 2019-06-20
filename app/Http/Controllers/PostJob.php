<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Projects;
use Illuminate\Support\Facades\Redirect;

class PostJob extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $JobType = DB::table('jobtype')->get();
        $Country = DB::table('countries')->select('id','name')->get();
        $category = DB::table('category')->select('id','name')->get();
        $jobduration = DB::table('jobduration')->select('id','name')->get();
        $hoursperweek = DB::table('hoursperweek')->select('id','name')->get();
      
        return view('company.post-job',compact('JobType','Country','category','jobduration','hoursperweek'));
    }
    public function StoreJob(Request $request){

        Projects::create($request->all());
        return Redirect::to('/post-job')->with('success','Job created successfully.');
     /*   $this->validate($request,[
            'j_title' => 'required',
            'Location' => 'required',
            'w_screen' => 'mimes:jpeg,jpg,bmp,png|max:5242880',
        ]); */
    }
}
