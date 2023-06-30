<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $gejala=DB::select('SELECT * from tb_gejala order by id_gejala asc');
        $penyakit=DB::select('SELECT * from tb_penyakit order by id_penyakit asc');
        return view('dashboard.dashboard',compact('gejala','penyakit'));
    }
}


