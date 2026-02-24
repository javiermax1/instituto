<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // main y 'main'  son función y vista
    // $param es el parámetro que quiero pasar
    public function main(){
        // la lógica php va aquí
        // esta es la vista:
//        return view('main');
        return view("main");
    }
}
