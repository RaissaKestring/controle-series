<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {

        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        compact(var_name: 'series');
        return view('listar-series', compact(var_name: 'series'));
    }
}
