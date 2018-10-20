<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $pasien = DB::table('pasien')
        ->get();
        

        return response()->json(['data'=>$pasien]);
    
    }

    

    public function store(Request $request){

        $alamat = $request->inputAlamat  . $request->inputRtRw . $request->inputKelurahan ;
        /* dd($alamat); */

        $pasien = new Pasien;
        $pasien ->identitas_pasien = $request->inputIdentitas;
        $pasien->name_pasien = $request->inputNama;
        if($request->radioJenisBerobat == 'umum'){
            $pasien->nomor_bpjs = 'umum';
        }
        else if($request->radioJenisBerobat == 'bpjs'){
            $pasien->nomor_bpjs = $request->inputBPJS;
        }
        $pasien->ttl_pasien = $request->inputTanggalLahir;
        $pasien->nomor_buku_pasien = $request->inputNomorBuku;
        $pasien->alamat_pasien = $alamat;
        $pasien->kepala_keluarga = $request->inputKepalaKeluarga;
        $pasien->jenis_kelamin = $request->radioJenisKelamin;        
        $pasien->save();

        $LastInsertId = $pasien->id;


        return response()->json(['success'=>'Data is successfully added','idPasienBaru' => $LastInsertId]);

    }

    
}
