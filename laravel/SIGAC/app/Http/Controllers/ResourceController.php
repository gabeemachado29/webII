<?php

namespace App\Http\Controllers;

use App\Repositories\ResourceRepository;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    protected ResourceRepository $repository;

    public function __construct(ResourceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Armazena um novo recurso.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $resource = $this->repository->store([
            'name' => $validated['name'],
        ]);

        return response()->json($resource, 201);
    }

    /**
     * Lista todos os recursos.
     */
    public function index()
    {
        $resources = $this->repository->getAll();
        return response()->json($resources);
    }

    /**
     * Deleta um recurso (soft delete).
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'Recurso deletado com sucesso.']);
    }

    /**
     * Restaura um recurso deletado.
     */
    public function restore($id)
    {
        $resource = $this->repository->restore($id);
        return response()->json($resource);
    }
}
