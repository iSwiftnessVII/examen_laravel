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
        Schema::create('vacunas', function (Blueprint $table) {
            $table->id();
            $table->integer('Lote');
            $table->date('fecha_vencimiento');
            $table->string('nombre_vacuna');
            $table->timestamps(); // campos de fecha de inicio (created_at) y alta (updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacunas');
    }
};
