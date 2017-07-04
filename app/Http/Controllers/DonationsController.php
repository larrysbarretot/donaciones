<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Acopio;
use App\Donante;
use App\Receptor;
use App\CategoriaProducto;
use App\SubcategoriaProducto;
use Illuminate\Http\Request;
use App\Donacion;
use Illuminate\Support\Facades\Auth;
class DonationsController extends Controller
{
    /**
     * Display list of donations
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $donations = Donacion::with(['damnificado', 'productos.subcategoria', 'donante', 'acopio'])->paginate(5);

        return view("my-donations", ["donations"=>$donations]);
    }

    public function donacionPaso1() {
        return view('admin.nueva-donacion.paso1');
    }

    public function donacionPaso2(Request $request) {
        $dni = $request->get('dni');
        $donante = Donante::where('dni', '=', $dni)->first();

        $data = [
            'dni' => $dni,
            'categorias' => CategoriaProducto::all(),
            'subcategorias' => SubcategoriaProducto::all(),
            'donante' => $donante
        ];
        
        return view('admin.nueva-donacion.paso2', $data);
    }

    public function terminado(Request $request) {
        // donante
        $dni = $request->get('dni');
        // donacion
        $codigo = $request->get('codigo');
        $cantidad = $request->get('cantidad');
        $categoria = $request->get('categoria');
        $subcategoria = $request->get('subcategoria');
        // receptor
        $receptor = Receptor::find(Auth::user()->id);
        // donante
        $donante = Donante::where('dni', '=', $dni)->first();

        if(!$donante) {
            $donante = new Donante;
            $donante->dni = $dni;
            $donante->save();
        }

        $producto = new Producto;
        $producto->codigo = $codigo;
        $producto->cantidad = $cantidad;
        $producto->entregado = 0; // 0: no entregado, 1: entregado
        //$producto->siniestros_id = $receptor->voluntarios()->where('estado', '=', '1')->first()->acopio->lugares_oficiales()->where('estado', '=', '1')->first()->siniestros_id;
        //$producto->acopios_id = $receptor->voluntarios()->where('estado', '=', '1')->first()->acopios_id;
        $producto->categorias_productos_id = $categoria;
        $producto->subcategorias_productos_id = $subcategoria;
        $producto->receptores_id = $receptor->id;
        $producto->donantes_id = $donante->id;
        $producto->donacion_id = null;
        $producto->save();
        return redirect('/home');
    }

    public function misRegistros()
    {
        $productos = Producto::where('receptores_id', '=', Auth::user()->receptor->id)->get();
        $data = [
            'productos' => $productos
        ];
        return view('admin.donaciones-registradas.mis-registros', $data);
    }

    public function entregarDonacionPaso1() {
        return view('admin.entrega-donacion.paso1');
    }

    public function entregarDonacionPaso2(Request $request) {
        $dni = $request->get('dni');
        //$donante = Donante::where('dni', '=', $dni)->first();
        $donaciones = Donacion::with(['damnificado', 'productos.subcategoria', 'donante', 'acopio'])->paginate(5);
        $data = [
            'dni' => $dni,
            'categorias' => CategoriaProducto::all(),
            'subcategorias' => SubcategoriaProducto::all(),
            'donaciones' => $donaciones
        ];
        
        return view('admin.entrega-donacion.paso2', $data);
    }

    /**
    *
    * Guarda el registro de una entrega de donacion a un damnificado
    */
    public function storeEntrega(Request $request) {
        // donante
        $dni = $request->get('dni');
        // donacion
        $codigo = $request->get('codigo');                            
        $damnificado = Damnificado::where("dni", $dni)->first();
        if(!$damnificado) {
            $donante = new Donante;
            $donante->dni = $dni;
            $donante->save();
        }

        $producto = new Producto;
        $producto->codigo = $codigo;
        $producto->cantidad = $cantidad;
        $producto->entregado = 0; // 0: no entregado, 1: entregado
        //$producto->siniestros_id = $receptor->voluntarios()->where('estado', '=', '1')->first()->acopio->lugares_oficiales()->where('estado', '=', '1')->first()->siniestros_id;
        //$producto->acopios_id = $receptor->voluntarios()->where('estado', '=', '1')->first()->acopios_id;
        $producto->categorias_productos_id = $categoria;
        $producto->subcategorias_productos_id = $subcategoria;
        $producto->receptores_id = $receptor->id;
        $producto->donantes_id = $donante->id;
        $producto->donacion_id = null;
        $producto->save();
        return redirect('/home');
    }
}
