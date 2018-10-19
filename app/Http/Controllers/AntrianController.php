<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NomorAntrian;

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
        

        $antrianBiru =  NomorAntrian::orderBy('created_at', 'desc')->whereNotNull('biru')->first();
        $antrianPink =  NomorAntrian::orderBy('created_at', 'desc')->whereNotNull('merah_muda')->first();
        $antrianHijau =  NomorAntrian::orderBy('created_at', 'desc')->whereNotNull('hijau')->first();
        /* dd($antrianHijau); */

        /* return view('admin/halaman_antrian'); */
        return view('admin/halaman_antrian',['antrianBiru' => $antrianBiru['biru'] ,'antrianPink' => $antrianPink['merah_muda'] , 'antrianHijau' => $antrianHijau['hijau']]);
    }

    public function store(Request $request){
        
        $antrian = new NomorAntrian;
       

        switch ($request ->warnaAntrian) {
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
        }
       
        
    }
    
}


