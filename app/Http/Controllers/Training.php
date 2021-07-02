<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient_Model;

class Training extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = Patient_Model::all();
        return view('Training', compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        parse_str($request->data, $request);

        $create_training = [
            'l_core' => $request['l_core'],
            'l_surf' => $request['l_surf'],
            'l_o2' => $request['l_o2'],
            'l_bp' => $request['l_bp'],
            'surf_stbl' => $request['surf_stbl'],
            'core_stbl' => $request['core_stbl'],
            'bp_stbl' => $request['bp_stbl'],
            'comfort' => $request['comfort'],
            'decision_adm_decs' => $request['decision_adm_decs'],
        ];

        $save_user = Patient_Model::create($create_training);
        
        if ($save_user) {
        	return 'success';
        }else{
        	return '!success';
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
        //
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
        //
    }
}
