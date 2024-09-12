<?php

// app/Http/Controllers/DosiController.php

namespace App\Http\Controllers;

use App\Models\Dosi;
use Illuminate\Http\Request;

class DosiController extends Controller
{
    public function store($cc, $fecha_dosis, $nombre_paciente, $cantidad_dosis)
    {
        $dosi = new Dosi();
        $dosi->CC = $cc;
        $dosi->fecha_dosis = $fecha_dosis;
        $dosi->nombre_paciente = $nombre_paciente;
        $dosi->cantidad_dosis = $cantidad_dosis;
        $dosi->save();

        return "Dosis insertada correctamente";
    }
}

