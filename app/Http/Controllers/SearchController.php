<?php

namespace App\Http\Controllers;

use App\Models\TDirection;
use App\Models\TFare;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $directions = TDirection::all();

        $query = TFare::query();

        if ($request->filled('vcMNEMONIC')) {
            $query->where('vcMNEMONIC', 'like', '%' . $request->vcMNEMONIC . '%');
        }

        if ($request->filled('inZONE_ID')) {
            $query->where('inZONE_ID', $request->inZONE_ID);
        }

        $fares = $query->get()->groupBy('inDIRECTION');

        return view('search', compact('directions', 'fares'));
    }
}
