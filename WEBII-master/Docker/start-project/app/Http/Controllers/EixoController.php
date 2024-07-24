<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eixo;

class EixoController extends Controller
{
   
    public function index()
    {
        $data = Eixo::all();
        dd($data);
        return view('eixo.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('eixo.create');
    }

   
    public function store(Request $request)
    {
        $eixo = new Eixo();
        $eixo->nome = $request->nome;
        $eixo->descricao = $request->descricao;
        $eixo->save();
        return redirect()->route('eixo.index');
    }

  
    public function show($id)
    {
        $eixo = Eixo::find($id);
        if(isset($eixo)) {
            return view('eixo.show', compact('eixo'));
        }
        return "<h1>ERRO: EIXO NÃO ENCONTRADO<h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eixo = Eixo::find($id);
        if(isset($eixo)) {
            return view('eixo.edit', compact('eixo'));
        }
        return "<h1>ERRO: EIXO NÃO ENCONTRADO<h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $eixo = Eixo::find($id);
        if(isset($eixo)) {
            $eixo->nome = $request->nome;
            $eixo->descricao = $request->descricao;
            $eixo->save();
            return redirect()->route('eixo.index');
        }
        return "<h1>ERRO: EIXO NÃO ENCONTRADO<h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
