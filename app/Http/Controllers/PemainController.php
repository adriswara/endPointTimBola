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

    public function update(Request $request, $id)
    {
        $pemains = Pemain::findOrFail($id);
        $validated = $request->validate([
            'idTim' => 'sometimes|required|integer',
            'namaPemain' => 'sometimes|required|string|max:255',
            'tinggiBadan' => 'sometimes|required|integer',
            'beratBadan' => 'sometimes|required|integer',
            'posisiPemain' => 'sometimes|required|string|max:50',
            'nomorPunggung' => 'sometimes|required|string|max:10',
        ]);

        $pemains->update($validated);

        return response()->json($pemains);
    }


    public function softDelete($id)
    {
        $pemains = Pemain::find($id);
        if (!$pemains) {
            return response()->json(['message' => 'Pemain not found'], 404);
        }
        $pemains->delete();

        return response()->json(['message' => 'Pemain deleted successfully']);
    }




    // Add more methods as needed for your application
}
