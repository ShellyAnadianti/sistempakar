<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyakit=DB::select('SELECT * from tb_penyakit order by id_penyakit asc');
       return view('penyakit.list-penyakit',compact('penyakit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penyakit.add-penyakit');
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
            'kode_penyakit'=>$request->kode_penyakit,
            'nama_penyakit'=>$request->nama_penyakit,
        ];
            DB::table('tb_penyakit')->insert($data);
           return redirect('penyakit');
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
        $penyakit=DB::select("SELECT * from tb_penyakit where id_penyakit='$id' ");
        
        return view('penyakit.edit-penyakit', compact('penyakit'));
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
        $data=[
            'kode_penyakit'=>$request->kode_penyakit,
            'nama_penyakit'=>$request->nama_penyakit,
        ];
        DB::table('tb_penyakit')->where('id_penyakit',$id)->update($data);
        return redirect('penyakit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_penyakit')->where('id_penyakit',$id)->delete();
        return redirect('penyakit');
    }
}
