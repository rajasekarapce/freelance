<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }
    public function joblisting(){
        return view('job-listing');
    }
    public function message()
    {
        return view('company.message');
    }
    public function changepassword()
    {
        return view('company.change-password');
    }
    public function managejobs()
    {
        return view('user.manage-jobs');
    }
    public function candidateearnings()
    {
        return view('user.candidate-earnings');
    }

    public function projectdetail()
    {
        return view('projectdetail');
    }

    public function viewalljobs()
    {
        $input = request()->all();
        $name = $input['name'];
        $prjctlocation = $input['prjctlocation'];
        $budget = $input['budgettype'];

        $filter = "";

        $query = DB::table('projects')->join('countries', 'projects.countryId', '=', 'countries.id');
        if($prjctlocation){
            $query->where('projects.location', 'LIKE', '%'. $prjctlocation .'%');
        }
        if($name){
            $query->where('projects.title', 'LIKE', '%'. $name .'%');
        }
        if(1 <= $budget){
            $query->where('projects.budgetType', $budget);
        }
        $query->select('projects.title','projects.location AS prjctlocation','projects.minRate','projects.maxRate','projects.created_at','projects.filename', 'countries.name AS countryname');
        $result = $query->get();

        return response()->json(['data'=>$result]);
    }
    
}
