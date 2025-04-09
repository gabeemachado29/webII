<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;
    protected $table = "nivels";

    public function curso() {
        $this->hasMany('\App\Models\Curso');
    }

}
