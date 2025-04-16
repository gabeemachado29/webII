<?php

namespace App\Http\Controllers;

use App\Repositories\DocumentRepository;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    protected DocumentRepository $repository;

    public function __construct(DocumentRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Armazena um novo documento.
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

        $document = $this->repository->store([
            'descricao' => $validated['descricao'],
            'arquivo' => $path,
            'data_envio' => $validated['data_envio'],
        ]);

        return response()->json($document, 201);
    }

    /**
     * Lista todos os documentos (com ou sem filtro).
     */
    public function index()
    {
        $documents = $this->repository->getAllWithTrashed();
        return response()->json($documents);
    }

    /**
     * Deleta um documento (soft delete).
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'Documento deletado com sucesso.']);
    }

    /**
     * Restaura um documento deletado.
     */
    public function restore($id)
    {
        $document = $this->repository->restore($id);
        return response()->json($document);
    }
}
