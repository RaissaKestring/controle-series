<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request) {

        $series = Serie::query()->orderBy(column:'nome')->get();
        return view('series.index')->with('series', $series);
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request, Serie $serie) {
        $nomeSerie=$request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
        return redirect('/series');
    }
}
