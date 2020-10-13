<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\articulos;
use App\Comentarios;



class ComentariosController extends Controller
{
   
    public function hola()
    {
        $peticion= DB::table('articulos')
        ->join('comentarios','comentarios.Id', '=', 'articulos.comentario')->get();
        json_encode($peticion);
        return $peticion;
    }

    public function soso ($Id){
$coment=comentarios::where('Id', $Id)->get();
return json_encode($coment);
    }

  
}
