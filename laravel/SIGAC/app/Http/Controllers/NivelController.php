<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NivelRepository; // Repositório de Nível
use App\Models\Nivel; // Modelo de Nível

class NivelController extends Controller
{
    protected $repository;

    public function __construct()
    {
        // Atribuindo o repositório para uso no controller
        $this->repository = new NivelRepository();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recupera todos os Níveis utilizando o repositório
        $data = $this->repository->selectAll();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Exemplo: Retorna uma view para criação de um novo Nível, se necessário.
        return view('nivel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cria um novo objeto de Nível
        $obj = new Nivel();
        $obj->nome = mb_strtoupper($request->nome, 'UTF-8'); // Converte o nome para maiúsculas
        $this->repository->save($obj); // Chama o repositório para salvar o novo nível
        return "<h1>Store - OK!</h1>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Exibe o Nível com o ID especificado
        $data = $this->repository->findById($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Exemplo: Retorna uma view para editar um nível com o ID especificado
        $nivel = $this->repository->findById($id);
        return view('nivel.edit', compact('nivel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Recupera o Nível com o ID
        $obj = $this->repository->findById($id);
        
        // Verifica se o Nível foi encontrado
        if (isset($obj)) {
            $obj->nome = mb_strtoupper($request->nome, 'UTF-8'); // Atualiza o nome do Nível
            $this->repository->save($obj); // Chama o repositório para salvar a atualização
            return "<h1>Update - OK!</h1>";
        }

        // Caso o Nível não seja encontrado
        return "<h1>Update - Nível não encontrado!</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Chama o repositório para deletar o Nível com o ID especificado
        if ($this->repository->delete($id)) {
            return "<h1>Delete - OK!</h1>";
        }

        // Caso o Nível não seja encontrado
        return "<h1>Delete - Nível não encontrado!</h1>";
    }
}
