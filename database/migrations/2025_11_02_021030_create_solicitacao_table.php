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
        Schema::create('solicitacao', function (Blueprint $table) {
            $table->id();
            $table->string('status', 20);
            $table->string('tipo_solicitacao', 20);
            $table->unsignedInteger('quant_solicitada');
            $table->dateTime('data_solicitacao');
            $table->string('nome_paciente')->nullable();
            $table->string('cpf_paciente', 14)->nullable();
            $table->string('tipo_sangue', 3)->nullable();
            $table->string('obs')->nullable();
            $table->foreignId('hemonucleo_id')
                            ->constrained('hemonucleo')
                            ->onDelete('cascade' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitacao');
    }
};
