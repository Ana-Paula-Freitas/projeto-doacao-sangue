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
        Schema::create('hemonucleo', function (Blueprint $table) {
            $table->id();
            $table->string('status', 20);
            $table->string('cnpj', 18)->unique();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('cidade');
            $table->string('uf', 2);
            $table->string('logradouro');
            $table->unsignedInteger('numero');
            $table->string('bairro');
            $table->string('cep', 9);
            $table->string('telefone', 15);
            $table->string('nome_responsavel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hemonucleo');
    }
};
