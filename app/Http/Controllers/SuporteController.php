<?php

namespace App\Http\Controllers;
use App\Models\suporte;
use Illuminate\Http\Request;

class SuporteController extends Controller
{
    public function index()
    {
        //recupera dados do banco de dados tabela chamados
        $chamados= suporte::orderBy('created_at','desc')->get();
        //dd($chamados);
        return view('site.suporte',['chamados'=>$chamados]);
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
    //cirar controle para editar dados
    public function editar($id)
    {
        $chamado = suporte::findOrFail($id);
        return view('site.edit',compact('chamado'));
    }
}
