<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NomorAntrian;
use Auth;

class AntrianController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        

        $antrianBiru =  NomorAntrian::orderBy('created_at', 'desc')->where('warna_kartu','biru')->first();
        $antrianPink =  NomorAntrian::orderBy('created_at', 'desc')->where('warna_kartu','pink')->first();
        $antrianHijau =  NomorAntrian::orderBy('created_at', 'desc')->where('warna_kartu','hijau')->first();
        $antrian = NomorAntrian::orderBy('created_at', 'desc')->first();
        /* dd($antrian); */
        /* dd($antrianHijau); */

        /* return view('admin/halaman_antrian'); */
        return view('admin/halaman_antrian',['antrianTerakhir' =>$antrian,'antrianBiru' => $antrianBiru['nomor_antrian'] ,'antrianPink' => $antrianPink['nomor_antrian'] , 'antrianHijau' => $antrianHijau['nomor_antrian']]);
    }

    public function store(Request $request){
        
        $antrian = new NomorAntrian;
        $antrian->nomor_antrian = $request->nomorAntrian;
        $antrian->warna_kartu = $request->warnaAntrian;
        $antrian->save();
        return response()->json(['success'=>'Data is successfully added']);
       

        /* switch ($request ->warnaAntrian) {
            case 'biru':
             $antrian->biru = $request->nomorAntrian;
             $antrian->save();
             return response()->json(['success'=>'Data is successfully added']);
                break;

            case 'hijau':
             $antrian->hijau = $request->nomorAntrian;
             $antrian->save();
             return response()->json(['success'=>'Data is successfully added']);
                break;

            case 'pink':
             $antrian->merah_muda = $request->nomorAntrian;
             $antrian->save();
             return response()->json(['success'=>'Data is successfully added']);
                break;
            
            default:
                return; 
                break;
        } */
       
        
    }
    
}


