<?php

namespace App\Http\Controllers\Reportes;

use App\Donacion;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReporteDonacionesController extends Controller
{
    /**
     * Muestra una lista completa de todas las donaciones realizadas
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function donaciones(Request $request)
    {
        $donations = Donacion::with(['damnificado', 'productos.subcategoria', 'donante', 'acopio', 'siniestro'])->paginate();

        return view("admin.reportes.donaciones", ["donaciones"=>$donations]);
    }

    /**
     * Muestra una lista de donaciones realizadas por hora
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function donacionesPorHora(Request $request)
    {
        $donaciones = $this->getQueryDonacionesPorHora()->get();
        return view("admin.reportes.donaciones-por-hora", ["donaciones"=>$donaciones]);
    }

    public function donacionesPorHoraGrafico(Request $request)
    {
        $results = $this->getQueryDonacionesPorHora()->get();
        //$horas = $results->pluck("hora")->toArray();
        $horas = $results->pluck("hora")->map(function($item, $key){
            return $item . ":00 - " . ($item+1) . ":00";
        });;
        $productos = $results->pluck("productos")->toArray();
        $donaciones = $results->pluck("donaciones")->toArray();
        $chart = Charts::multi('bar', 'highcharts')
            // Setup the chart settings
            ->title("Donaciones por hora")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 0) // Width x Height
            // This defines a preset of colors already done:)
            //->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Productos', $productos)
            ->dataset('Donaciones', $donaciones)
            // Setup what the values mean
            ->labels($horas);
        return view("admin.reportes.donaciones-por-hora-grafico", ["chart"=>$chart]);
    }

    /**
     * retorna una query para mostrar lista de donaciones por hora
     * @return mixed
     */
    private function getQueryDonacionesPorHora()
    {
        $select = [
            \DB::raw("EXTRACT(HOUR FROM donaciones.created_at) as hora"),
            \DB::raw("COUNT(*) as donaciones"),
            \DB::raw("SUM(productos.cantidad) as productos"),
        ];
        return \DB::table("donaciones")
            ->select($select)
            ->join("productos", "productos.donacion_id", "=", "donaciones.id")
            ->groupBy(\DB::raw("EXTRACT(HOUR FROM donaciones.created_at)"));
    }
}
