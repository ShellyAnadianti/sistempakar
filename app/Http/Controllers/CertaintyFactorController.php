<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;
use Hash;

use Illuminate\Support\Arr;



class CertaintyFactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if(isset($request->choicegejala))
        {
            $stringchoicegejala = '';
            // dump($request->choicegejala);
            foreach ($request->choicegejala as $key => $value) {
                if($key==0){
                $stringchoicegejala = $stringchoicegejala .'"Gejala'.$value.'":0.8';
                }
                else
                {
                    $stringchoicegejala = $stringchoicegejala .',"Gejala'.$value.'":0.8';
                }
            }
        }
        $stringchoicegejala= "{".$stringchoicegejala."}";
        //dump($stringchoicegejala);

        // $gejalaUser = array(
        //     "Gejala14" => 0.4,
        //     "Gejala10" => 0.2,
        //     "Gejala82" => 0.2,
        //     "Gejala76" => 0.1,
        //     "Gejala73" => 0.3,
        // );

        // dump(json_encode($gejalaUser));


        //dd(json_decode($stringchoicegejala));

        // echo"<H2>CF</H2>";
        # get data from database
        $res_penyakit = DB::select('select * from tb_penyakit');
        $stringpenyakit = '';
        #create string for json
        foreach ($res_penyakit as $key => $penyakit) {
            $res_gejalapenyakit = DB::select('select * from tb_penyakit as p inner join tb_detail_gejala as dg on p.id_penyakit = dg.id_penyakit_r where p.id_penyakit = '.$penyakit->id_penyakit);
            $stringgejala = '';
            foreach ($res_gejalapenyakit as $g => $gejala) {
                if($g==0){
                    $stringgejala =$stringgejala .'"Gejala'.$gejala->id_gejala_r.'":'.$gejala->md;
                }
                else
                {
                    $stringgejala =$stringgejala .',"Gejala'.$gejala->id_gejala_r.'":'.$gejala->md;
                }
            }
            $stringgejala= "{".$stringgejala."}";
            if($key==0)
            {
                $stringpenyakit =$stringpenyakit .'"P'.$penyakit->id_penyakit.'":'.$stringgejala;
            }
            else
            {
                $stringpenyakit =$stringpenyakit .',"P'.$penyakit->id_penyakit.'":'.$stringgejala;
            }
        }
        $stringpenyakit= "{".$stringpenyakit."}";
        $datadbpenyakit = ((array)json_decode($stringpenyakit, TRUE));
        // $gejalaUser = array(
        //     "Gejala14" => 0.4,
        //     "Gejala10" => 0.2,
        //     "Gejala82" => 0.2,
        //     "Gejala76" => 0.1,
        //     "Gejala73" => 0.3,
        // );

        $gejalaUser = (json_decode($stringchoicegejala));


        // dump("TABLE PENYAKIT & GEJALA");
        // dump($datadbpenyakit);
        // dump("GEJALA USER");
        // dump($gejalaUser);
        
        $cfTotal = $this->hitungCF($datadbpenyakit, $gejalaUser);
        $penyakitTerdiagnosa = $this->diagnosaPenyakit($cfTotal);
        // echo "Penyakit yang mungkin terjadi: $penyakitTerdiagnosa\n";

        return view('rulepasien.hasilkonsultasi',compact('penyakitTerdiagnosa'));
      
    }

    public function hitungCF($gejalaPenyakit, $gejalaUser) {
        $cfTotal = array();
        // dump("HITUNG CF");
        foreach ($gejalaPenyakit as $penyakit => $gejalap) {
            $cfTotal[$penyakit] = 1;
            // echo("<h4>call gejala : ".$penyakit."</h4>");
            // dump($gejalaPenyakit[$penyakit]);
            // dump($penyakit);
            foreach ($gejalaUser as $gejalau => $nilai) {
                // echo($gejalau." :".$nilai."<br>");
                // dump(isset($gejalaPenyakit[$penyakit][$gejalau]));
                if (isset($gejalaPenyakit[$penyakit][$gejalau])) {
                    // echo($gejalau." :".$nilai."<strong>(TRUE)</strong><br>");
                    $cfTotal[$penyakit] += $nilai;
                }
                else
                {
                    // echo($gejalau." :".$nilai."(FALSE)<br>");
                }          
            }
            // echo("<h4>total value : ".$cfTotal[$penyakit]."</h4>");
            // echo("<h4>===================================================================================================</h4>");
        }
        return $cfTotal;
    }

    function diagnosaPenyakit($cfTotal) {
        // dump("KESIMPULAN");
        $penyakitTerbesar = '';
        $cfTerbesar = -1;
        asort($cfTotal);
        // dump($cfTotal);
        $max= (max($cfTotal));
        $sick = [];
        
    foreach( $cfTotal as $k => $v )
    {
       $v= (string)$v;
        if($v==(string)$max)
        { 
           array_push($sick,$k) ;
        }
    }

    $penyakitTerbesar = implode( ",", $sick );
        return $penyakitTerbesar;
    }
    
    

}
