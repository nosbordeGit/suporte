<?php

namespace App\Http\Controllers;
use App\Models\suporte;
use Illuminate\Http\Request;

class SuporteController extends Controller
{
    public function index()
    {
        return view('site.suporte');
    }


    public function chamado()
    {
        return view('site.chamado');
    }

    public function chamadoSave(Request $request)
    {
       // dd($request);

          suporte::create($request->all());
          return redirect()->route('suporte.index');
    }
}
