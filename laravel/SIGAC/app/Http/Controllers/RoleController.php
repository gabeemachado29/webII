<?php

namespace App\Http\Controllers;

use App\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected RoleRepository $repository;

    public function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Armazena um novo cargo.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role = $this->repository->store([
            'name' => $validated['name'],
        ]);

        return response()->json($role, 201);
    }

    /**
     * Lista todos os cargos.
     */
    public function index()
    {
        $roles = $this->repository->getAll();
        return response()->json($roles);
    }

    /**
     * Deleta um cargo (soft delete).
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'Cargo deletado com sucesso.']);
    }

    /**
     * Restaura um cargo deletado.
     */
    public function restore($id)
    {
        $role = $this->repository->restore($id);
        return response()->json($role);
    }
}
