<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Cria/eleva a tabela. Nunca alterar essa estrutura.
    public function up(): void
    {

        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80)->nullable(false);
            $table->string('email', 100)->nullable(false)->unique();
            $table->string('password')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

     // É chamada quando executar um comando de exclusão da tabela. Depende do que está escrito dentro dela.
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
