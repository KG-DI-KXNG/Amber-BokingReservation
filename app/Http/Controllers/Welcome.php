<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\tourcompany;
use Illuminate\Http\Request;

class Welcome extends Controller
{
    function index(){
        $tour = tourcompany::all();
        $program = program::all();
        $now = now()->toDateString();
        return view('welcome')->with(['tour'=>$tour, 'program'=>$program, 'now'=>$now]);
    }
}
