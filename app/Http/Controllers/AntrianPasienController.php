<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pasien;
use App\ProsesPendaftaran;

class AntrianPasienController extends Controller
{

    public function store(Request $request){
        $pendaftaran = new ProsesPendaftaran;

        

        


    }
    public function show($id){
        /* $pasien = DB::table('pasien')->where('identitas_pasien', $id)->first(); */
        $pasien = Pasien::where('identitas_pasien', $id) -> first();

        if($pasien == null){
            $pasien = "error";
        }


        return response()->json($pasien);
    }

    public function print(Request $request){

        return view('admin/print_kartu');
        
    }
}
