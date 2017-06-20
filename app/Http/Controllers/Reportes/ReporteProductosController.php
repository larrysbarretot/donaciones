<?php

namespace App\Http\Controllers\Reportes;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReporteProductosController extends Controller
{
    /**
     * Muestra el total de productos que se donaron
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function productos(Request $request)
    {
        $query = \DB::table("productos");
        $query = $query->join("categorias_productos","categorias_productos.id","productos.categorias_productos_id")
                ->join("subcategorias_productos","subcategorias_productos.id","productos.subcategorias_productos_id")
                ->orderBy("subcategorias_productos.nombre")
                ->groupBy("subcategorias_productos.id")
                ->select(
                    "productos.codigo as codigo",
                    "categorias_productos.nombre as categoria",
                    "subcategorias_productos.nombre as subcategoria",
                    \DB::raw("COUNT(*) as cantidad")
                );

        $productos = $query->get();
        return view("admin.reportes.productos", ["productos"=>$productos]);
    }

    public function productosSinDonar(Request $request)
    {
        $query = \DB::table("productos");
        $query = $query->join("categorias_productos","categorias_productos.id","productos.categorias_productos_id")
            ->join("subcategorias_productos","subcategorias_productos.id","productos.subcategorias_productos_id")
            ->orderBy("subcategorias_productos.nombre")
            ->groupBy("subcategorias_productos.id")
            ->whereNull("productos.receptores_id")
            ->select(
                "productos.codigo as codigo",
                "categorias_productos.nombre as categoria",
                "subcategorias_productos.nombre as subcategoria",
                \DB::raw("COUNT(*) as cantidad")
            );

        $productos = $query->get();
        return view("admin.reportes.productos-sin-donar", ["productos"=>$productos]);
    }

    public function topProductos()
    {

    }
}
