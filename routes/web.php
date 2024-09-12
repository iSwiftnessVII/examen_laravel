<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\VacunaController;
use App\Http\Controllers\DosiController;
use App\Http\Controllers\CostoVacunaController;
use App\Http\Controllers\UsuarioExamenController;

// Rutas para Vacunas
Route::get('/vacunas', [VacunaController::class, 'index']); // Mostrar todas las vacunas
Route::get('/vacunas/create', [VacunaController::class, 'create']); // Formulario para crear una vacuna
Route::post('/vacunas', [VacunaController::class, 'store']); // Guardar una nueva vacuna

// Rutas para Dosis
Route::get('/dosis/{cc}/{fecha_dosis}/{nombre_paciente}/{cantidad_dosis}', [DosiController::class, 'store']);

// Rutas para Costos de Vacuna
Route::get('/costos_vacuna/{nombre_laboratorio}/{lote}/{costos_lote}', [CostoVacunaController::class, 'index']);

// Ruta para Usuario Examen
Route::get('/usuario_examen/{nombre}/{edad}/{adso}/{cedula}', [UsuarioExamenController::class, 'store']);

