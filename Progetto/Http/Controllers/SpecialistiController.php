<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialista;

class SpecialistiController extends Controller
{
    public function mostraSpec(Request $request)
    {
        $query = Specialista::with('dipartimento');

        if ($request->has('search')) {
            $search = $request->input('search');

            // Se finisce con *, rimuovilo e cerca con LIKE "term%"
            if (str_ends_with($search, '*')) {
                $search = rtrim($search, '*');
                $query->where('nome', 'LIKE', $search . '%')
                      ->orWhere('cognome', 'LIKE', $search . '%');
            } else {
                // Cerca ovunque
                $query->where('nome', 'LIKE', '%' . $search . '%')
                     ->orWhere('cognome', 'LIKE', '%' . $search . '%');
            }
        }

        $specialisti = $query->get();

        return view('specialisti', compact('specialisti'));
    }




}

