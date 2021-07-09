<?php

namespace App\Imports;

use App\Models\Patient_Model;
use Maatwebsite\Excel\Concerns\ToModel;

class PatientImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        try{
        return new Patient_Model([
            'l_core' => $row[0],
            'l_surf' => $row[1], 
            'l_o2' => $row[2], 
            'l_bp' => $row[3],
            'surf_stbl' => $row[4], 
            'core_stbl' => $row[5], 
            'bp_stbl' => $row[6],
            'comfort' => $row[7], 
            'decision_adm_decs' => $row[8], 
        ]);
    } catch (Exception $e) {

        return $e;
    }
    }
}
