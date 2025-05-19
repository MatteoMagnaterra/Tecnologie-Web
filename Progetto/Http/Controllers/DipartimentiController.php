<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dipartimento;

class DipartimentiController extends Controller
{
    public function mostraDip(Request $request)
    {
        $query = Dipartimento::select('nome', 'descrizione');
        
        if ($request->has('search')) {
            $searchteam = $request->input('search');
            $query->where('nome', 'LIKE', '%' . $searchteam . '%');
        }
        
        $dipartimenti = $query->get();
        
        return view ('dipartimenti', compact('dipartimenti'));
    }
}
