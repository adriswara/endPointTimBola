<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jadwal; // Assuming you have a Jadwal model
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    // Your methods for handling Jadwal-related requests will go here
    // For example:

    public function showAll()
    {
        $jadwals = Jadwal::all(); // Assuming you have a Jadwal model
        return response()->json($jadwals);
    }

    public function show($id)
    {
        // Logic to retrieve and return a specific jadwal by ID
    }

    public function insert(Request $request)
    {
        $validated = $request->validate([
            'tanggalPertandingan' => 'required|date',
            'waktuPertandingan' => 'required',
            'timRumah' => 'required|integer',
            'timTamu' => 'required|integer',
        ]);

        $jadwal = Jadwal::create($validated);

        return response()->json($jadwal, 201);
    }
    public function update(Request $request, $id)
    {
        $jadwals = Jadwal::findOrFail($id);
        $validated = $request->validate([
            'tanggalPertandingan' => 'sometimes|required|date',
            'waktuPertandingan' => 'sometimes|required',
            'timRumah' => 'sometimes|required|integer',
            'timTamu' => 'sometimes|required|integer',
        ]);

        $jadwals->update($validated);

        return response()->json($jadwals);
    }
    public function softDelete($id)
    {
        $jadwals = Jadwal::find($id);
        if (!$jadwals) {
            return response()->json(['message' => 'Jadwal not found'], 404);
        }
        $jadwals->delete();

        return response()->json(['message' => 'Jadwal deleted successfully']);
    }

    // Add more methods as needed for your application
}
