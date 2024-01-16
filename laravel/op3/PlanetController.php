<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    public function index()
    {
        // Voer een SELECT-query uit op de 'planets'-tabel
        $planets = DB::table('planets')->get();

        // Geef de resultaten door aan de view
        return view('planets.index', ['planets' => $planets]);
    }
}
