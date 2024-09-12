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
        Schema::create('dosis', function (Blueprint $table) {
            $table->string('CC')->primary();
            $table->date('fecha_dosis');
            $table->string('nombre_paciente');
            $table->integer('cantidad_dosis');
            $table->timestamps(); // campos de fecha de inicio (created_at) y alta (updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosis');
    }
};
