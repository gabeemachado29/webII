<?php

namespace App\Repositories;

use App\Models\Document;

class DocumentRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(new Document());
    }

    /**
     * Faz upload do arquivo e retorna o caminho.
     */
    public function uploadFile($file): string
    {
        return $file->store('documents', 'public');
    }

    /**
     * Recupera todos os documentos (incluindo deletados com soft delete).
     */
    public function getAllWithTrashed()
    {
        return $this->model->withTrashed()->get();
    }
}
