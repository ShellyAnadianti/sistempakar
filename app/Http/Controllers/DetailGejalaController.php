<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DetailGejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailgejala=DB::select('SELECT * from tb_detail_gejala order by id asc');
       return view('detailgejala.list-detailgejala',compact('detailgejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detailgejala.add-detailgejala');
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
            'id_penyakit_r'=>$request->id_penyakit_r,
            'id_gejala_r'=>$request->id_gejala_r,
            'cbr_status'=>$request->cbr_status,
            'mb'=>$request->mb,
            'md'=>$request->md,
            'w'=>$request->w,
        ];

        // DD($data);
            DB::table('tb_detail_gejala')->insert($data);
           return redirect('detailgejala');
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
        $detailgejala=DB::select("SELECT * from tb_detail_gejala where id='$id' ");
        
        return view('detailgejala.edit-detailgejala', compact('detailgejala'));
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
            'id_penyakit_r'=>$request->id_penyakit_r,
            'id_gejala_r'=>$request->id_gejala_r,
            'cbr_status'=>$request->cbr_status,
            'mb'=>$request->mb,
            'md'=>$request->md,
            'w'=>$request->w,
        ];
        DB::table('tb_detail_gejala')->where('id',$id)->update($data);
        return redirect('detailgejala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_detail_gejala')->where('id',$id)->delete();
        return redirect('detailgejala');
    }
}
