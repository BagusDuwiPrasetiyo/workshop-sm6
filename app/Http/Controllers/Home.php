<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient_Model;

class Home extends Controller
{
    public function index()
    {
    	$patient = Patient_Model::all()->toJson();
    	// return $patient;
        return view('home', compact('patient'));
    }
}
