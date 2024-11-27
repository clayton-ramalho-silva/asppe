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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();           
            $table->date('data_nascimento');
            $table->string('estado_civil');
            $table->boolean('tem_filhos')->default('0');
            $table->string('genero');
            $table->string('reservista');
            $table->string('reservista_description')->nullable();
            $table->string('rg');
            $table->bigInteger('cpf');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais');           
            $table->string('telefone_residencial');
            $table->string('telefone_celular');
            $table->json('vagas_interesse')->nullable();
            $table->json('experiencia_profissional')->nullable();
            $table->string('escolaridade');
            $table->string('participou_selecao');
            $table->string('jovem_aprendiz');
            $table->string('informatica');
            $table->string('ingles');
            $table->string('tamanho_uniforme')->nullable();
            $table->string('curriculo');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
