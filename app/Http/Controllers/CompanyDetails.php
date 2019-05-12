<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyDetails extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('company.post-job');
    }
    public function transaction()
    {
        return view('company.transaction');
    }
    public function managecandidates()
    {
        return view('company.manage-candidates');
    }
}
