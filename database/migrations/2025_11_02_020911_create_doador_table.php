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
        Schema::create('doadores', function (Blueprint $table) {
            $table->id();
            $table->string('status', 20);
            $table->string('cpf', 14);
            $table->string('rg', 20)->nullable();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('cidade');
            $table->string('uf', 2);
            $table->string('logradouro');
            $table->unsignedInteger('numero');
            $table->string('bairro');
            $table->string('cep', 11);
            $table->string('telefone', 15);
            $table->dateTime('data_nascimento');
            $table->decimal('peso', 5,2);
            $table->string('tipo_sanguineo', 3);
            $table->string('profissao');
            $table->string('sexo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doadores');
    }
};