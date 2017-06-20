<?php

namespace App\Http\Controllers\Reportes;

use App\Donacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReporteDonacionesController extends Controller
{
    public function donaciones(Request $request)
    {
        $donations = Donacion::with(['damnificado', 'productos.subcategoria', 'donante', 'acopio', 'siniestro'])->get();

        return view("admin.reportes.donaciones", ["donaciones"=>$donations]);
    }
}
