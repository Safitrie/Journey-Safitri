<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Lakukan pencarian pada model Place
        $results = Place::where('nama_tempat', 'LIKE', "%$query%")
                        ->orWhere('alamat', 'LIKE', "%$query%")
                        ->get();

        return response()->json($results);
    }
}
