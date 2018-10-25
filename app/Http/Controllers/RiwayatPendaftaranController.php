<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\ProsesPendaftaran;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RiwayatPendaftaranController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

   public function index(){
    /* $prosesPendaftaran = DB::table('proses_pendaftaran')
    ->join('pasien','proses_pendaftaran.pasien_id', '=' ,'pasien.id')
    ->get(); */

    $prosesPendaftaran = DB::table('pasien')
    ->join('proses_pendaftaran','pasien.id', '=' ,'proses_pendaftaran.pasien_id')
    ->get();
    
    
    return response()->json(['data'=>$prosesPendaftaran]);
   }

   public function destroy($id){

    ProsesPendaftaran::destroy($id);
    return response()->json(['success'=>'Data is successfully deleted']);

}
    
}
