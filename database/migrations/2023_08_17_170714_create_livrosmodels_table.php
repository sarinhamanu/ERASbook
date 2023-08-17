<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livrosmodels', function (Blueprint $table) {
            $table->id();
            $table->string('nome do livro')->nullable(false);
            $table->string('resumo')->nullable(false);
            $table->string('codigo do livro')->Unique->nullable(false);
            $table->string('imagens')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livrosmodels');
    }
};
