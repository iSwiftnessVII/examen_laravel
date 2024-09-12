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
        Schema::create('costos_vacuna', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Laboratorio');
            $table->integer('Lote');
            $table->decimal('costos_lote', 8, 2);
            $table->timestamps(); // campos de fecha de inicio (created_at) y alta (updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costo_vacunas');
    }
};
