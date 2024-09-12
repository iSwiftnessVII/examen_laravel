<?php

// app/Http/Controllers/CostosVacunaController.php

namespace App\Http\Controllers;

use App\Models\CostoVacuna;
use Illuminate\Http\Request;

class CostoVacunaController extends Controller
{
    public function index($nombre_laboratorio, $lote, $costos_lote)
    {
        $costoVacuna = new CostoVacuna();
        $costoVacuna->Nombre_Laboratorio = $nombre_laboratorio;
        $costoVacuna->Lote = $lote;
        $costoVacuna->costos_lote = $costos_lote;
        $costoVacuna->save();

        return $costoVacuna;
    }
}

