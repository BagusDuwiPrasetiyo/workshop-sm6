<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Decision_Model;
use DB;

class Algorithm extends Controller
{
    public function index()
    {
        //Probabilitas A
    	$patient = Decision_Model::all();
        return view('Classification', compact('patient'));
    }
    public function upload(Request $request)
    {
        //Probabilitas A
    	$patient = Decision_Model::all();
        $countA = Decision_Model::select('decision_adm_decs')->where('decision_adm_decs', 'A')->count();
        $countAll = Decision_Model::select('decision_adm_desc')->count();
        $ProbA = $countA/$countAll;

        //Probabilitas S
        $countS = Decision_Model::select('decision_adm_decs')->where('decision_adm_decs', 'S')->count();
        $ProbS = $countS/$countAll;
 
        //Menghitung Jumlah L Core Terhadap A
        $datalcoreA = DB::select("Select count('*') as jmlcoreA from dataset_pasien where decision_adm_decs = 'A' and l_core = '". $request->l_core ."'");
        $lcoreA = $datalcoreA[0]->jmlcoreA;   

        //Menghitung Jumlah L Core Terhadap S
        $datalcoreS = DB::select("Select count('*') as jmlcoreS from dataset_pasien where decision_adm_decs = 'S' and l_core = '". $request->l_core ."'");
        $lcoreS = $datalcoreS[0]->jmlcoreS; 
        
        //Probabilitas L Core Terhadap A
        $Prob_lcoreA = $lcoreA/$countA;

        //Probabilitas L Core Terhadap S
        $Prob_lcoreS = $lcoreS/$countS;

        //Menghitung Jumlah L Surf Terhadap A
        $datalsurfA = DB::select("Select count('*') as jmlsurfA from dataset_pasien where decision_adm_decs = 'A' and l_surf = '". $request->l_surf ."'");
        $lsurfA = $datalsurfA[0]->jmlsurfA;   

        //Menghitung Jumlah L Surf Terhadap S
        $datalsurfS = DB::select("Select count('*') as jmlsurfS from dataset_pasien where decision_adm_decs = 'S' and l_surf = '". $request->l_surf ."'");
        $lsurfS = $datalsurfS[0]->jmlsurfS; 

        //Probabilitas L Surf Terhadap A
        $Prob_lsurfA = $lsurfA/$countA;

        //Probabilitas L Surf Terhadap S
        $Prob_lsurfS = $lsurfS/$countS;

        //Menghitung Jumlah L o2 Terhadap A
        $datalo2A = DB::select("Select count('*') as jmlA from dataset_pasien where decision_adm_decs = 'A' and l_o2 = '". $request->l_o2 ."'");
        $lo2A = $datalo2A[0]->jmlA;   

        //Menghitung Jumlah L o2 Terhadap S
        $datalo2S = DB::select("Select count('*') as jmlS from dataset_pasien where decision_adm_decs = 'S' and l_o2 = '". $request->l_o2 ."'");
        $lo2S = $datalo2S[0]->jmlS; 

        //Probabilitas L o2 Terhadap A
        $Prob_lo2A = $lo2A/$countA;

        //Probabilitas L o2 Terhadap S
        $Prob_lo2S = $lo2S/$countS;

        //Menghitung Jumlah L bp Terhadap A
        $datalbpA = DB::select("Select count('*') as jmlbpA from dataset_pasien where decision_adm_decs = 'A' and l_bp = '". $request->l_bp ."'");
        $lbpA = $datalbpA[0]->jmlbpA;   

        //Menghitung Jumlah L bp Terhadap S
        $datalbpS = DB::select("Select count('*') as jmlbpS from dataset_pasien where decision_adm_decs = 'S' and l_bp = '". $request->l_bp ."'");
        $lbpS = $datalbpS[0]->jmlbpS; 

        //Probabilitas L bp Terhadap A
        $Prob_lbpA = $lbpA/$countA;

        //Probabilitas L bp Terhadap S
        $Prob_lbpS = $lbpS/$countS;

        //Menghitung Jumlah surf stbl Terhadap A
        $datasurf_stblA = DB::select("Select count('*') as jmlsurf_stblA from dataset_pasien where decision_adm_decs = 'A' and surf_stbl = '". $request->surf_stbl ."'");
        $surf_stblA = $datasurf_stblA[0]->jmlsurf_stblA;   

        //Menghitung Jumlah surf stbl Terhadap S
        $datasurf_stblS = DB::select("Select count('*') as jmlsurf_stblS from dataset_pasien where decision_adm_decs = 'S' and surf_stbl = '". $request->surf_stbl ."'");
        $surf_stblS = $datasurf_stblS[0]->jmlsurf_stblS; 

        //Probabilitas surf stbl Terhadap A
        $Prob_surf_stblA = $surf_stblA/$countA;

        //Probabilitas surf stbl Terhadap S
        $Prob_surf_stblS = $surf_stblS/$countS;

        //Menghitung Jumlah core stbl Terhadap A
        $datacore_stblA = DB::select("Select count('*') as jmlcore_stblA from dataset_pasien where decision_adm_decs = 'A' and core_stbl = '". $request->core_stbl ."'");
        $core_stblA = $datacore_stblA[0]->jmlcore_stblA;   

        //Menghitung Jumlah core stbl Terhadap S
        $datacore_stblS = DB::select("Select count('*') as jmlcore_stblS from dataset_pasien where decision_adm_decs = 'S' and core_stbl = '". $request->core_stbl ."'");
        $core_stblS = $datacore_stblS[0]->jmlcore_stblS; 

        //Probabilitas core stbl Terhadap A
        $Prob_core_stblA = $core_stblA/$countA;

        //Probabilitas core stbl Terhadap S
        $Prob_core_stblS = $core_stblS/$countS;

        //Menghitung Jumlah bp stbl Terhadap A
        $databp_stblA = DB::select("Select count('*') as jmlbp_stblA from dataset_pasien where decision_adm_decs = 'A' and bp_stbl = '". $request->bp_stbl ."'");
        $bp_stblA = $databp_stblA[0]->jmlbp_stblA;   

        //Menghitung Jumlah bp stbl Terhadap S
        $databp_stblS = DB::select("Select count('*') as jmlbp_stblS from dataset_pasien where decision_adm_decs = 'S' and bp_stbl = '". $request->bp_stbl ."'");
        $bp_stblS = $databp_stblS[0]->jmlbp_stblS; 

        //Probabilitas bp stbl Terhadap A
        $Prob_bp_stblA = $bp_stblA/$countA;

        //Probabilitas bp stbl Terhadap S
        $Prob_bp_stblS = $bp_stblS/$countS;

        //Menghitung Jumlah comfort Terhadap A
        $datacomfortA = DB::select("Select count('*') as cmA from dataset_pasien where decision_adm_decs = 'A' and comfort = '". $request->comfort ."'");
        $comfortA = $datacomfortA[0]->cmA;   

        //Menghitung Jumlah comfort Terhadap S
        $datacomfortS = DB::select("Select count('*') as cmS from dataset_pasien where decision_adm_decs = 'S' and comfort = '". $request->comfort ."'");
        $comfortS = $datacomfortS[0]->cmS; 

        //Probabilitas comfort Terhadap A
        $Prob_comfortA = $comfortA/$countA;

        //Probabilitas comfort Terhadap S
        $Prob_comfortS = $comfortS/$countS;

        //TOTAL PROBABILITAS A
        $totalA = $ProbA*$Prob_lcoreA*$Prob_lsurfA*$Prob_lo2A*$Prob_lbpA*$Prob_surf_stblA*$Prob_core_stblA*$Prob_bp_stblA*$Prob_comfortA;

        //TOTAL PROBABILITAS S
        $totalS = $ProbS*$Prob_lcoreS*$Prob_lsurfS*$Prob_lo2S*$Prob_lbpS*$Prob_surf_stblS*$Prob_core_stblS*$Prob_bp_stblS*$Prob_comfortS;


        if ($totalA > $totalS){
            $result = "A";
        } elseif ($totalA < $totalS){
            $result = "S";
        } else{
            $result = "Draw";
        }
        session()->put(['result'=> $result]);
        $hasil = ['a'=> $totalA, 's'=> $totalS];
        session()->put(['hasil'=> $hasil]);
        return redirect (url('/result'));


    }
    public function result()
    {
        return view('Result');
    }
}
