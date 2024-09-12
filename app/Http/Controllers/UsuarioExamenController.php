<?php

// app/Http/Controllers/UsuarioExamenController.php

namespace App\Http\Controllers;

use App\Models\UsuarioExamen;
use Illuminate\Http\Request;

class UsuarioExamenController extends Controller
{
    public function store($nombre, $edad, $adso, $cedula)
    {
        $usuarioExamen = new UsuarioExamen();
        $usuarioExamen->nombre = $nombre;
        $usuarioExamen->edad = $edad;
        $usuarioExamen->adso = $adso;
        $usuarioExamen->cedula = $cedula;
        $usuarioExamen->save();

        return "Usuario insertado correctamente";
    }
}

