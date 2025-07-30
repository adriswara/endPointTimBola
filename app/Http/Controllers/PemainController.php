<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pemain;
use App\Models\Skor;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    // Your methods for handling Jadwal-related requests will go here
    // For example:

    public function showAll()
    {
        $pemains = Pemain::all();
        return response()->json($pemains);
    }

    public function show($id)
    {
        // Logic to retrieve and return a specific jadwal by ID
    }
    public function insert(Request $request)
    {
        $validated = $request->validate([
            'idTim' => 'required|integer',
            'namaPemain' => 'required|string|max:255',
            'tinggiBadan' => 'required|integer',
            'beratBadan' => 'required|integer',
            'posisiPemain' => 'required|string|max:50',
            'nomorPunggung' => 'required|string|max:10',
        ]);

        $pemains = Pemain::create($validated);

        return response()->json($pemains, 201);
    }




    // Add more methods as needed for your application
}
