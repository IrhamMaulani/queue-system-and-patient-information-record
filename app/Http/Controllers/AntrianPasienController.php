<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pasien;
use App\ProsesPendaftaran;
use Auth;
use Carbon\Carbon;

class AntrianPasienController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $pendaftaran = DB::table('proses_pendaftaran')
        ->join('pasien','proses_pendaftaran.pasien_id', '=' ,'pasien.id')
        ->where( 'proses_pendaftaran.created_at', '<' ,Carbon::now())
        ->get();
        

        return response()->json(['data'=>$pendaftaran]);
        
    }

    public function store(Request $request){
        $userId = auth()->id();

        $pendaftaran = new ProsesPendaftaran;

        $pendaftaran->keluhan_pasien = $request ->keluhanPasien;
        $pendaftaran->tujuan_poli_pasien = $request ->poliTujuan;
        $pendaftaran->pasien_id = $request ->idPasien;
        $pendaftaran->user_id = $userId;
        $pendaftaran->nomor_antrian = $request ->nomorAntrian;

        $pendaftaran->save();

        return response()->json(['success'=>'Data is successfully added']);

    }

    

    public function show($id){
        /* $pasien = DB::table('pasien')->where('identitas_pasien', $id)->first(); */
        $pasien = Pasien::where('identitas_pasien', $id) -> first();

        if($pasien == null){
            $pasien = "kosong";
        }
        return response()->json($pasien);
    }
        

    public function print($id){

         $pasien = Pasien::find($id);

        return view('admin/print_kartu',['pasien' => $pasien ]);
        
    }
}
