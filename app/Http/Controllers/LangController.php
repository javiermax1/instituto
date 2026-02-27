<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        ;
        $lang = request()->input("lang");
        session()->put('lang', $lang);
        // vuelve pagina anterior
        return redirect()->back();

        echo "<h1>He seleccionado el idioma $lang</h1>";

        //return redirect()->route('main');

    }
}
