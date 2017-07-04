<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Muestra la seccion de quienes somos
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function quienesSomos()
    {
        return view('quienes-somos');
    }
}
