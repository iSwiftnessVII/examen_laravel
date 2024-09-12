<?php


namespace App\Http\Controllers;
use App\Models\Vacuna;

use Illuminate\Http\Request;

class VacunaController extends Controller
{
    public function index()
    {
        $vacunas = Vacuna::all();
        return view('vacunas.index', compact('vacunas'));
    }

    public function create()
    {
        return view('vacunas.create');
    }

    public function store(Request $request)
    {
        $vacuna = new Vacuna();
        $vacuna->Lote = $request->input('Lote');
        $vacuna->fecha_vencimiento = $request->input('fecha_vencimiento');
        $vacuna->nombre_vacuna = $request->input('nombre_vacuna');
        $vacuna->save();

        return redirect('/vacunas');
    }
}
