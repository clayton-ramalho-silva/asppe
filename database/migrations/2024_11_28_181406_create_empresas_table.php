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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj')->unique();
            $table->string('razao_social');
            $table->string('nome_fantasia');
            $table->string('cep');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('pais')->default('Brasil');
            $table->string('cidade');
            $table->string('uf');
            $table->string('nome_representante_legal');
            $table->string('sobrenome_representante_legal');
            $table->string('cpf');
            $table->string('email');
            $table->string('logotipo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
