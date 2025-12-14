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
        Schema::create('estoque', function (Blueprint $table) {
            $table->id();
            $table->string('status', 20);
            $table->string('tipo_sangue', 3);
            $table->foreignId('hemonucleo_id')
                            ->constrained('hemonucleo')
                            ->onDelete('cascade' );
            $table->unsignedInteger('quant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};