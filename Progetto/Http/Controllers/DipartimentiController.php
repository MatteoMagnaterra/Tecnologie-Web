<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dipartimento;
use App\Models\Prestazione;

class DipartimentiController extends Controller
{
    public function mostraDip(Request $request)
    {
        $query = Dipartimento::select('nome', 'descrizione', 'idDip');

        if ($request->has('search')) {
            $search = $request->input('search');

            if (str_ends_with($search, '*')) {
                $prefix = rtrim($search, '*');
                $query->where('nome', 'LIKE', $prefix . '%');
            } else {
                $query->where('nome', 'LIKE', '%' . $search . '%');
            }
        }

        $dipartimenti = $query->get();

        return view('dipartimenti', compact('dipartimenti'));
    }

    
    public function show($id)
    {
        $dipartimento = Dipartimento::with('prestazioni', 'specialisti')->findOrFail($id);
    
        return view('dipartimenti1', compact('dipartimento'));
    }
    
    public function mostraPre($id)
    {
        $prestazione = Prestazione::with(['dipartimento', 'specialista'])->findOrFail($id);
        return view('prestazioni', compact('prestazione'));
    }

}
