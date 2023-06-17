<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('login.login');
    }

    public function registrasipasien()
    {
       return view('login.list-pasien');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.add-pasien');
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
            'kode_gejala'=>$request->kode_gejala,
            'nama_gejala'=>$request->nama_gejala,
        ];
            DB::table('tb_gejala')->insert($data);
           return redirect('gejala');
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
        $gejala=DB::select("SELECT * from tb_gejala where id_gejala='$id' ");
        
        return view('gejala.edit-gejala', compact('gejala'));
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
            'kode_gejala'=>$request->kode_gejala,
            'nama_gejala'=>$request->nama_gejala,
        ];
        DB::table('tb_gejala')->where('id_gejala',$id)->update($data);
        return redirect('gejala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_gejala')->where('id_gejala',$id)->delete();
        return redirect('gejala');
    }
}
