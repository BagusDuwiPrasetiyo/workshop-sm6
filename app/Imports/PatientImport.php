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
        return new Patient_Model([
            'l_core' => $row[1],
            'l_surf' => $row[2],
            'l_o2' => $row[3],
            'l_bp' => $row[4],
            'surf_stbl' => $row[5],
            'core_stbl' => $row[6],
            'bp_stbl' => $row[7],
            'comfort' => $row[8],
            'decision_adm_decs' => $row[9],
        ]);
    }
}
