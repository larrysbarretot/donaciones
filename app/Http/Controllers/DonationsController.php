<?php

namespace App\Http\Controllers;

use App\CategoriaProducto;
use App\SubcategoriaProducto;
use Illuminate\Http\Request;
use App\Donacion;
class DonationsController extends Controller
{
    /**
     * Display list of donations
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $donations = Donacion::with(['damnificados', 'productos'])->get();

        return view("my-donations", ["donations"=>$donations]);
    }

    public function donacionPaso1() {
        return view('admin.nueva-donacion.paso1');
    }

    public function donacionPaso2(Request $request) {
        $dni = $request->get('dni');
        $data = [
            'dni' => $dni,
            'categorias' => CategoriaProducto::all(),
            'subcategorias' => SubcategoriaProducto::all()
        ];
        return view('admin.nueva-donacion.paso2', $data);
    }
}
