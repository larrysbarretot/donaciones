<?php

namespace App\Http\Controllers;

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
}
