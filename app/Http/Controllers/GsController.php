<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsController extends Controller
{
   public function showData()
   {
        $dataFromGS = file_get_contents('http://gsx2json.com/api?id=12lILmpLBi1ruMSc8AnJ1huGvFvc2yFNOj8qftyvdAW8&column=fasle');
        $gsData = json_decode($dataFromGS);
         return view('pages.home',['data'=>$gsData->rows]);

   }
}
