<?php

namespace App\Repositories;

use App\Models\Declaration;

class DeclarationRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(new Declaration());
    }

    /**
     * Faz upload do arquivo e retorna o caminho.
     */
    public function uploadFile($file): string
    {
        return $file->store('declarations', 'public');
    }

    /**
     * Recupera todas as declarações (incluindo as deletadas soft delete).
     */
    public function getAllWithTrashed()
    {
        return $this->model->withTrashed()->get();
    }
}
