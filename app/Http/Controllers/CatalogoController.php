<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function catalogo($comando = null){
        return view('catalogo',compact('comando'));
    }

    
}
