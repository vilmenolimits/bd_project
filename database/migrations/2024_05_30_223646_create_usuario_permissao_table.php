<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuario_permissao', function (Blueprint $table) {
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->foreignId('permissao_id')->constrained('permissoes');
            $table->primary(['usuario_id', 'permissao_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_permissao');
    }
};
