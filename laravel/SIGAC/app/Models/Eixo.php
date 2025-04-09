<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Eixo extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome'];

    public function curso() {
        $this->hasMany('\App\Models\Curso');
    }
        
}
