<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan=DB::select('SELECT * from tb_laporan order by id_laporan asc');
       return view('laporan.list-laporan',compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('penyakit.add-penyakit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[
            'id_laporan'=>$request->id_laporan,
            'id_pasien'=>$request->id_pasien,
            'pasien'=>$request->pasien,
            'hasil_perhitungan_cf'=>$request->hasil_perhitungan_cf,
            'hasil_perhitungan_cbr'=>$request->hasil_perhitungan_cbr,
            'hasil_diagnosa_cbr'=>$request->hasil_diagnosa_cbr,
            'hasil_diagnosa_cbr'=>$request->hasil_diagnosa_cbr,
        ];
            DB::table('tb_laporan')->insert($data);
           return redirect('laporan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $penyakit=DB::select("SELECT * from tb_penyakit where id_penyakit='$id' ");
        
        // return view('penyakit.edit-penyakit', compact('penyakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $data=[
            // 'kode_penyakit'=>$request->kode_penyakit,
            // 'nama_penyakit'=>$request->nama_penyakit,
        // ];
        // DB::table('tb_penyakit')->where('id_penyakit',$id)->update($data);
        // return redirect('penyakit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_laporan')->where('id_laporan',$id)->delete();
        return redirect('laporan');
    }
}
