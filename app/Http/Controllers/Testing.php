<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient_Model;

class Testing extends Controller
{
    public function index()
    {
        $patient = Patient_Model::all();
        // return $patient;
        return view('Testing', compact('patient'));
    }
}
