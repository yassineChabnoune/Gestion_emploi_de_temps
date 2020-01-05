<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use PDF;
use Response;
class Controller extends BaseController
{
     
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function show()
    {
        
        $test="polat alemdar";
       return response()->json($test);
    }
    // public function div(Array $a)

    // {
    //     $emploi =[];
    //     for($i=0;(int)$i<$request->hours/2;$i++){

    //         $emploi[$i]= $request->name;
    //        }
    //     return $emploi;
       
    // }

    function aslan(Request $request)
    {
        // /dd($request[0]["hours"]);
      
        // dd($request[1]["name"]);
       

        // $emploi =[];
        // for($j=0;(int)$j<40;$j++){
        // for($i=0;(int)$i<$q{0}{"hours"}/2;$i++){
        // $emploi[$j]= $q{0}{"name"};
        //  }
        //  }

         $j=0;
         $emploi =[];
         $d=$request;
         //dd($request);
         while($j<sizeof($request->test))
         {
           for($i=0;(int)$i<$d->test[$j]["hours"]/2;$i++){
               $emploi[]= $d->test[$j]["name"] ;
              }
             $j++;
         }
         if(sizeof($emploi)==20){
             shuffle($emploi);
             PDF::loadView("pdf",compact('emploi'))->setPaper('a4', 'landscape')->save(public_path()."/pdfs/test.pdf")->stream("aslan".".pdf");
             //dd($emploi);
             return $emploi;
         }
         else{
            $te=array_fill(sizeof($emploi),(20-sizeof($emploi)),"rien");
            $tes =array_values($te) ;
            $final = array_merge($emploi,$tes);
            shuffle($final);
            //dd($final);
            //$te=array("poalt");
            PDF::loadView("pdf",compact('final'))->setPaper('a4', 'landscape')->save(public_path()."/pdfs/test.pdf")->stream("aslan2".".pdf");
            
            return $final;
         }
        }
       
        function export_pdf(){
            $file= public_path(). "/pdfs/test.pdf";

            $headers = array(
                      'Content-Type: application/pdf',
                    );
        
            return Response::download($file, 'test.pdf', $headers);
           
        }


           
        
}

