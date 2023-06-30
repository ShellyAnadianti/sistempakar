<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PilihanGejalaController extends Controller
{
    public function index()
    {
        $gejala=DB::select('SELECT * from tb_gejala order by id_gejala asc');
       return view('rulepasien.pilihgejala',compact('gejala'));
    }

    public function test(Request $request)
    {
        dd($request->choicegejala);
    }
    public function kirimsaran(){
        return view('saran.kirimsaran');
    }
}
