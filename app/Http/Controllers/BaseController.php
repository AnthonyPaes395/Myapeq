<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BaseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inicio(Request $request)
    {
        return view('inicio');
    }

    public function nosotros(Request $request)
    {
        return view('nosotros');
    }

    public function producto(Request $request)
    {
        $sql = DB::table('catalogo')->get()->toArray();
        // dd($sql);
        return view('producto')->with('catalogo',$sql);
    }

    public function contacto(Request $request)
    {
        return view('contacto');
    }
}
