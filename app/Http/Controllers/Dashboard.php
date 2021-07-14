<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient_Model;
use App\Models\History_Model;

class Dashboard extends Controller
{
    public function index()
    {
        $patient = Patient_Model::all()->count();
        $history = History_Model::all()->count();
        $dashboard = 'active';
        return view('Dashboard', compact('patient', 'dashboard', 'history'));
    }
}
