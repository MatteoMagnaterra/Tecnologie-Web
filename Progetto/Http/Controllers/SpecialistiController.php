<?php

namespace App\Http\Controllers;

use App\Models\Utente;

class SpecialistiController extends Controller
{
    public function index()
    {

        $specialisti = Utente::where('ruolo', 'specialista')
            ->get();

        return view('specialisti', compact('specialisti'));
    }
}

