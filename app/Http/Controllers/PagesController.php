<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function nosotros(){
        return view('nosotros');
    }

}