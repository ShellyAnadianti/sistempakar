<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saran=DB::select('SELECT * from tb_saran order by id_saran asc');
       return view('saran.list-saran',compact('saran'));
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
            'id_saran'=>$request->id_saran,
            'saran'=>$request->saran,
        ];
            DB::table('tb_saran')->insert($data);
           return redirect('saran');
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
        DB::table('tb_saran')->where('id_saran',$id)->delete();
        return redirect('saran');
    }
}
