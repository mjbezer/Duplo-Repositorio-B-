<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use DB;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{

    protected $file;
    protected $total;
    public function __construct()
    {
        $this->log = new Log();
        $this->file = pathinfo( __FILE__ );
        $this->total= new TesteController();
    }

   public function index()
  {
    $request =  new Request();
    $request->request->add(['email'=>'marcelo.bezerra@teste.com']);
    //$email['email'] = 'mjbezer@hotmail.com';
    //$nome = $email['email'];
    //$json['name'] = explode('@',$email['email'])[0];

   $this->total->teste();
    //$name =  explode('@',$email)[0];
    //$volta = json_decode($valida->getContent(), true);
    //dd($volta);*/

   }

}
