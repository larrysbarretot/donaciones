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
                ->orderBy(\DB::raw("SUM(productos.cantidad)"), "DESC")
                ->groupBy("subcategorias_productos.id")
                ->select(
                    "productos.codigo as codigo",
                    "categorias_productos.nombre as categoria",
                    "subcategorias_productos.nombre as subcategoria",
                    \DB::raw("SUM(productos.cantidad) as cantidad")
                );

        $productos = $query->paginate();
        return view("admin.reportes.productos", ["productos"=>$productos]);
    }

    /**
     * Muestra el total de productos que no se entregaron aun
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productosSinDonar(Request $request)
    {
        $query = \DB::table("productos");
        $query = $query->join("categorias_productos","categorias_productos.id","productos.categorias_productos_id")
            ->join("subcategorias_productos","subcategorias_productos.id","productos.subcategorias_productos_id")
            ->join("donantes","donantes.id","productos.donantes_id")
            ->orderBy(\DB::raw("SUM(productos.cantidad)"), "DESC")
            ->groupBy("productos.codigo", "donantes.dni")
            ->whereNull("productos.receptores_id")
            ->select(
                "productos.codigo as codigo",
                "categorias_productos.nombre as categoria",
                "subcategorias_productos.nombre as subcategoria",
                \DB::raw("SUM(productos.cantidad) as cantidad"),
                "donantes.dni as dni",
                "productos.created_at as fecha"
            );

        $productos = $query->paginate();
        return view("admin.reportes.productos-sin-donar", ["productos"=>$productos]);
    }
}
