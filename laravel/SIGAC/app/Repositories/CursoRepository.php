<?php
    namespace App\Repositories;
    use App\Models\Curso;

    class EixoRepository extends Repository {
        
        public function __construct() {
            parent::__construct(new Curso());
        }
    }
?>