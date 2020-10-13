<?php

namespace App\Http\Controllers\wos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class arjon extends Controller
{
    public function papo($nombre=null,$sexo=null,$edad=null)
    {
        return "hola mundo mi nombre es:".$nombre."mi sexo es:".$sexo."mi edad es:".$edad."";
    }
public function mayela()
{
    return redirect()->route('saludo',["nombre"=>"daniel","sexo"=>"M","edad"=>"25"]);
}



}
