<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gejala=DB::select('SELECT * from tb_gejala order by id_gejala asc');
       return view('gejala.list-gejala',compact('gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gejala.add-gejala');
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
