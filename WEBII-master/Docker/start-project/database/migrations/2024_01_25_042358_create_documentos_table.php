<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->string('descricao');
            $table->float('horas_in');
            $table->string('status')->default(0);     // (0)SOLICITADO / (1)DEFERIDO / (-1)INDEFERIDO
            $table->string('comentario')->nullable();
            $table->float('horas_out')->default(0);
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
