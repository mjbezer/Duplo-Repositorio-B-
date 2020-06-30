<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class TesteController extends Controller
{
    public function teste()
    {


         try {
             $user = DB::connection('mysql')->table('email_configs')->where('from_address', 'marcelo.bezerra@teste.com')->first();
            return response()->json(['message' => $user, 'status' => 3],200);
         }catch (\Exception $e) {
            $test = strpos($e->getMessage(),'1146 Table');
            dd($test);
        }
    }
}
