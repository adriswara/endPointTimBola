<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skor;
use App\Models\Pemain;

class SkorController extends Controller
{
    // Your methods for handling Jadwal-related requests will go here
    // For example:

    public function showAll()
    {
        $skors = Skor::all();
        return response()->json($skors);
    }

    public function show($id)
    {
        // Logic to retrieve and return a specific jadwal by ID
    }

    public function insert(Request $request)
    {
        $validated = $request->validate([
            'totalSkor' => 'required|string|max:255',
            'pemainYangMencetakGol' => 'required|string|max:255',
            'waktuTerjadinyaGol' => 'required',
            'idJadwal' => 'required|integer',
        ]);

        $skors = Skor::create($validated);

        return response()->json($skors, 201);
    }
    // Add more methods as needed for your application
}
