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
            $table->string('nome')->require();
            $table->string('sombrenome')->require();
            $table->date('data_nascimento')->require();
            $table->string('estado_civil')->require();
            $table->boolean('tem_filhos')->default('0')->require();
            $table->string('genero')->require();
            $table->string('reservista')->require();
            $table->string('rg')->require();
            $table->bigInteger('cpf')->require();
            $table->string('logradouro')->require();
            $table->string('number')->nullable();
            $table->string('complemnto')->nullable();
            $table->string('bairro')->require();
            $table->string('cidade')->require();
            $table->string('estado')->require();
            $table->string('pais')->default('brasil');
            $table->string('email')->require();
            $table->string('telefone_residencial')->nullable();
            $table->string('telefone_celular')->require();
            $table->json('vagas_interesse')->require();
            $table->json('experiencia_profissional')->require();
            $table->string('escolaridade')->require();
            $table->string('participou_selecao')->require();
            $table->string('jovem_aprendiz')->nullable();
            $table->string('informatica')->require();
            $table->string('ingles')->require();
            $table->string('tamanho_uniforme')->nullable();
            $table->string('curriculo')->require();
            $table->foreignId('user_id')->constrained();




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
