<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;
use Hash;

use Illuminate\Support\Arr;



class CbrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $userCase = array(
            "Gejala1" => "Tidak",
            "Gejala2" => "Tidak",
            "Gejala3" => "Tidak",
            "Gejala4" => "Tidak",
            "Gejala5" => "Tidak",
            "Gejala6" => "Tidak",
            "Gejala7" => "Tidak",
            "Gejala8" => "Tidak",
            "Gejala9" => "Tidak",
            "Gejala10" => "Tidak",
            "Gejala11" => "Tidak",
            "Gejala12" => "Tidak",
            "Gejala13" => "Tidak",
            "Gejala14" => "Tidak",
            "Gejala15" => "Tidak",
            "Gejala16" => "Tidak",
            "Gejala17" => "Tidak",
            "Gejala18" => "Tidak",
            "Gejala19" => "Tidak",
            "Gejala20" => "Tidak",
            "Gejala21" => "Tidak",
            "Gejala22" => "Tidak",
            "Gejala23" => "Tidak",
            "Gejala24" => "Tidak",
            "Gejala25" => "Tidak",
            "Gejala26" => "Tidak",
            "Gejala27" => "Tidak",
            "Gejala28" => "Tidak",
            "Gejala29" => "Tidak",
            "Gejala30" => "Tidak",
            "Gejala31" => "Tidak",
            "Gejala32" => "Tidak",
            "Gejala33" => "Tidak",
            "Gejala34" => "Tidak",
            "Gejala35" => "Tidak",
            "Gejala36" => "Tidak",
            "Gejala37" => "Tidak",
            "Gejala38" => "Tidak",
            "Gejala39" => "Tidak",
            "Gejala40" => "Tidak",
            "Gejala41" => "Tidak",
            "Gejala42" => "Tidak",
            "Gejala43" => "Tidak",
            "Gejala44" => "Tidak",
            "Gejala45" => "Tidak",
            "Gejala46" => "Tidak",
            "Gejala47" => "Tidak",
            "Gejala48" => "Tidak",
            "Gejala49" => "Tidak",
            "Gejala50" => "Tidak",
            "Gejala51" => "Tidak",
            "Gejala52" => "Tidak",
            "Gejala53" => "Tidak",
            "Gejala54" => "Tidak",
            "Gejala55" => "Tidak",
            "Gejala56" => "Tidak",
            "Gejala57" => "Tidak",
            "Gejala58" => "Tidak",
            "Gejala59" => "Tidak",
            "Gejala60" => "Tidak",
            "Gejala61" => "Tidak",
            "Gejala62" => "Tidak",
            "Gejala63" => "Tidak",
            "Gejala64" => "Tidak",
            "Gejala65" => "Tidak",
            "Gejala66" => "Tidak",
            "Gejala67" => "Tidak",
            "Gejala68" => "Tidak",
            "Gejala69" => "Tidak",
            "Gejala70" => "Tidak",
            "Gejala71" => "Tidak",
            "Gejala72" => "Tidak",
            "Gejala73" => "Tidak",
            "Gejala74" => "Tidak",
            "Gejala75" => "Tidak",
            "Gejala76" => "Tidak",
            "Gejala77" => "Tidak",
            "Gejala78" => "Tidak",
            "Gejala79" => "Tidak",
            "Gejala80" => "Tidak",
            "Gejala81" => "Tidak",
            "Gejala82" => "Tidak",
            "Gejala83" => "Tidak",
            "Gejala84" => "Tidak",
            "Gejala85" => "Tidak",
            "Gejala86" => "Tidak",
            "Gejala87" => "Tidak",
            "Gejala88" => "Tidak",
            "Gejala89" => "Tidak",
            "Gejala90" => "Tidak"
        );


        if(isset($request->choicegejala))
        {
            $stringchoicegejala = '';
            // dump($request->choicegejala);
            foreach ($request->choicegejala as $key => $value) {
                // if($key==0){
                // $stringchoicegejala = $stringchoicegejala .'"Gejala'.$value.'":"Ya"';
                // }
                // else
                // {
                //     $stringchoicegejala = $stringchoicegejala .',"Gejala'.$value.'":"Ya"';
                // }
                $userCase["Gejala".$value] = "Ya";
            }
        }
        $stringchoicegejala= "{".$stringchoicegejala."}";

// dd($userCase);
//         dd(json_decode($stringchoicegejala));
       echo"<H2>CBR</H2>";

        # get data from database
        $res_penyakit = DB::select('select * from tb_penyakit');
        $stringpenyakit = '';
        $arraypenyakit =[];
        #create string for json
        foreach ($res_penyakit as $key => $penyakit) {
            //$res_gejalapenyakit = DB::select('select * from tb_penyakit as p inner join tb_detail_gejala as dg on p.id_penyakit = dg.id_penyakit_r where p.id_penyakit = '.$penyakit->id_penyakit);
            $res_gejalapenyakit = DB::select('select *,(select dg.cbr_status from  tb_detail_gejala as dg where dg.id_gejala_r = g.id_gejala and dg.id_penyakit_r = '.$penyakit->id_penyakit.') as stat from tb_gejala as g;
            ');
            $stringgejala = '';
            foreach ($res_gejalapenyakit as $g => $gejala) {
                $stat = 'Tidak';
                if($gejala->stat != null)
                {
                    $stat = 'Ya';
                }
                if($g==0){
                    $stringgejala =$stringgejala .'"Gejala'.$gejala->id_gejala.'":"'.$stat.'"';
                }
                else
                {
                    $stringgejala =$stringgejala .',"Gejala'.$gejala->id_gejala.'":"'.$stat.'"';
                }
            }
            $stringgejala =$stringgejala .',"Diagnosis'.'":'.'"P'.$penyakit->id_penyakit.'"';
            $stringgejala= "{".$stringgejala."}";
            if($key==0)
            {
                $stringpenyakit =$stringpenyakit.$stringgejala;
            }
            else
            {
                $stringpenyakit =$stringpenyakit .','.$stringgejala;
            }
        }

        $stringpenyakit= "[".$stringpenyakit."]";
        $datadbpenyakit = ((array)json_decode($stringpenyakit, TRUE));

        // dump("data db");
        
        // dump($stringpenyakit);

        //dd($datadbpenyakit);


        // $cases = array(
        //     array(
        //         'Gejala1' => 'Ya',
        //         'Gejala2' => 'Tidak',
        //         'Gejala3' => 'Ya',
        //         'Diagnosis' => 'P1',
        //     ),
        //     array(
        //         'Gejala1' => 'Tidak',
        //         'Gejala2' => 'Ya',
        //         'Gejala3' => 'Tidak',
        //         'Diagnosis' => 'P2',
        //     ),
        //     // Kasus lainnya
        // );

        // dump($cases);
        // dump(json_encode($cases));



        // $userCase = array(
        //     "Gejala1" => "Tidak",
        //     "Gejala2" => "Tidak",
        //     "Gejala3" => "Tidak",
        //     "Gejala4" => "Tidak",
        //     "Gejala5" => "Tidak",
        //     "Gejala6" => "Tidak",
        //     "Gejala7" => "Tidak",
        //     "Gejala8" => "Tidak",
        //     "Gejala9" => "Tidak",
        //     "Gejala10" => "Tidak",
        //     "Gejala11" => "Tidak",
        //     "Gejala12" => "Tidak",
        //     "Gejala13" => "Tidak",
        //     "Gejala14" => "Tidak",
        //     "Gejala15" => "Tidak",
        //     "Gejala16" => "Tidak",
        //     "Gejala17" => "Tidak",
        //     "Gejala18" => "Tidak",
        //     "Gejala19" => "Tidak",
        //     "Gejala20" => "Tidak",
        //     "Gejala21" => "Tidak",
        //     "Gejala22" => "Tidak",
        //     "Gejala23" => "Tidak",
        //     "Gejala24" => "Tidak",
        //     "Gejala25" => "Tidak",
        //     "Gejala26" => "Tidak",
        //     "Gejala27" => "Tidak",
        //     "Gejala28" => "Tidak",
        //     "Gejala29" => "Tidak",
        //     "Gejala30" => "Tidak",
        //     "Gejala31" => "Tidak",
        //     "Gejala32" => "Tidak",
        //     "Gejala33" => "Tidak",
        //     "Gejala34" => "Tidak",
        //     "Gejala35" => "Tidak",
        //     "Gejala36" => "Tidak",
        //     "Gejala37" => "Tidak",
        //     "Gejala38" => "Tidak",
        //     "Gejala39" => "Tidak",
        //     "Gejala40" => "Tidak",
        //     "Gejala41" => "Tidak",
        //     "Gejala42" => "Tidak",
        //     "Gejala43" => "Tidak",
        //     "Gejala44" => "Tidak",
        //     "Gejala45" => "Tidak",
        //     "Gejala46" => "Tidak",
        //     "Gejala47" => "Tidak",
        //     "Gejala48" => "Tidak",
        //     "Gejala49" => "Tidak",
        //     "Gejala50" => "Tidak",
        //     "Gejala51" => "Tidak",
        //     "Gejala52" => "Tidak",
        //     "Gejala53" => "Tidak",
        //     "Gejala54" => "Tidak",
        //     "Gejala55" => "Tidak",
        //     "Gejala56" => "Tidak",
        //     "Gejala57" => "Tidak",
        //     "Gejala58" => "Tidak",
        //     "Gejala59" => "Tidak",
        //     "Gejala60" => "Tidak",
        //     "Gejala61" => "Tidak",
        //     "Gejala62" => "Tidak",
        //     "Gejala63" => "Tidak",
        //     "Gejala64" => "Tidak",
        //     "Gejala65" => "Tidak",
        //     "Gejala66" => "Tidak",
        //     "Gejala67" => "Tidak",
        //     "Gejala68" => "Tidak",
        //     "Gejala69" => "Tidak",
        //     "Gejala70" => "Tidak",
        //     "Gejala71" => "Tidak",
        //     "Gejala72" => "Ya",
        //     "Gejala73" => "Tidak",
        //     "Gejala74" => "Tidak",
        //     "Gejala75" => "Ya",
        //     "Gejala76" => "Tidak",
        //     "Gejala77" => "Ya",
        //     "Gejala78" => "Tidak",
        //     "Gejala79" => "Tidak",
        //     "Gejala80" => "Tidak",
        //     "Gejala81" => "Ya",
        //     "Gejala82" => "Tidak",
        //     "Gejala83" => "Tidak",
        //     "Gejala84" => "Tidak",
        //     "Gejala85" => "Tidak",
        //     "Gejala86" => "Tidak",
        //     "Gejala87" => "Tidak",
        //     "Gejala88" => "Tidak",
        //     "Gejala89" => "Tidak",
        //     "Gejala90" => "Tidak"
        // );
        
        $diagnosis = $this->diagnoseDisease($datadbpenyakit, $userCase);
        
        echo "Diagnosis penyakit: $diagnosis\n";
        
      
    }

    function calculateSimilarity($case1, $case2) {
        //dump("case pembanding");
        //dump($case1);
        //dump("case dicari");
        //dump($case2);
        // dd("test");
        $matched = 0;
        $total = count($case1) - 1; // Exclude diagnosis attribute
       
        foreach ($case1 as $key => $value) {
          
            if (($key!="Diagnosis")&&($value == $case2[$key])) 
            {
                $matched++;
            }
          
        }
       
        dump("matched / total : ".$matched / $total);
        return $matched / $total;
    }

    function diagnoseDisease($cases, $userCase) {
        $bestSimilarity = -1;
        $diagnosis = '';
       
        foreach ($cases as $case) {
            $similarity = $this->calculateSimilarity($case, $userCase);
           
            if ($similarity > $bestSimilarity) {
                $bestSimilarity = $similarity;
                $diagnosis = $case['Diagnosis'];
            }
        }
    
        return $diagnosis;
    }
    

    
    

}