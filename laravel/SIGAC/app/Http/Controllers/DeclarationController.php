<?php

namespace App\Http\Controllers;

use App\Repositories\DeclarationRepository;
use Illuminate\Http\Request;

class DeclarationController extends Controller
{
    protected DeclarationRepository $repository;

    public function __construct(DeclarationRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Armazena uma nova declaração.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'descricao' => 'required|string|max:255',
            'arquivo' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
            'data_envio' => 'nullable|date',
        ]);

        $path = null;

        if ($request->hasFile('arquivo')) {
            $path = $this->repository->uploadFile($request->file('arquivo'));
        }

        $declaration = $this->repository->store([
            'descricao' => $validated['descricao'],
            'arquivo' => $path,
            'data_envio' => $validated['data_envio'],
        ]);

        return response()->json($declaration, 201);
    }

    /**
     * Lista todas as declarações (com opção de filtro).
     */
    public function index()
    {
        $declarations = $this->repository->getAll();
        return response()->json($declarations);
    }

    /**
     * Deleta (soft delete) uma declaração.
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'Declaração excluída com sucesso.']);
    }

    /**
     * Restaura uma declaração deletada.
     */
    public function restore($id)
    {
        $declaration = $this->repository->restore($id);
        return response()->json($declaration);
    }
}
