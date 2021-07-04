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
        $training = 'active';
        $patient = Patient_Model::all();
        return view('Training', compact('patient', 'training'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        try {

            $create_training = [
                'l_core' => $request->l_core,
                'l_surf' => $request->l_surf,
                'l_o2' => $request->l_o2,
                'l_bp' => $request->l_bp,
                'surf_stbl' => $request->surf_stbl,
                'core_stbl' => $request->core_stbl,
                'bp_stbl' => $request->bp_stbl,
                'comfort' => $request->comfort,
                'decision_adm_decs' => $request->decision_adm_decs,
            ];

            Patient_Model::create($create_training);
        } catch (Exception $e) {

            return $e;
        }

        return 'success';
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
        try {

            $create_training = [
                'l_core' => $request->l_core,
                'l_surf' => $request->l_surf,
                'l_o2' => $request->l_o2,
                'l_bp' => $request->l_bp,
                'surf_stbl' => $request->surf_stbl,
                'core_stbl' => $request->core_stbl,
                'bp_stbl' => $request->bp_stbl,
                'comfort' => $request->comfort,
                'decision_adm_decs' => $request->decision_adm_decs,
            ];

            Patient_Model::where('id', $request['id_training'])->update($create_training);
        } catch (Exception $e) {

            return $e;
        }

        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Patient_Model::where('id', $id)->delete();
    }

    public function getUserData($id)
    {
    	return Patient_Model::where('id', $id)->first();
    }
}
