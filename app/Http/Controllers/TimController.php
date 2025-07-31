<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tim; // Assuming you have a Tim model
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class TimController extends Controller
{
    // Your methods for handling Jadwal-related requests will go here
    // For example:

    public function showAll()
    {
        // $tims = Tim::all(); // Assuming you have a Tim 

        $tims = Tim::all()->map(function ($item) {
            $item->logoTim = base64_encode($item->logoTim);
            return $item;
        });
        return response()->json($tims);
    }

    public function show($id)
    {
        // Logic to retrieve and return a specific jadwal by ID
    }


    public function insert(Request $request)
    {
        $validated = $request->validate([
            'namaTim' => 'required|string|max:255',
            'logoTim' => 'required',
            'tahunBerdiri' => 'required|integer',
            'alamatMarkas' => 'required|string|max:255',
            'kotaMarkas' => 'required|string|max:50',
        ]);

        $tims = Tim::create($validated);

        return response()->json($tims, 201);
    }

    public function update(Request $request, $id)
    {
        $tim = Tim::findOrFail($id);
        $validated = $request->validate([
            'namaTim' => 'sometimes|required|string|max:255',
            'logoTim' => 'sometimes|required',
            'tahunBerdiri' => 'sometimes|required|integer',
            'alamatMarkas' => 'sometimes|required|string|max:255',
            'kotaMarkas' => 'sometimes|required|string|max:50',
        ]);

        $tim->update($validated);

        return response()->json($tim);
    }

    public function softDelete($id)
    {
        $tim = Tim::find($id);
        if (!$tim) {
            return response()->json(['message' => 'Tim not found'], 404);
        }
        $tim->delete();

        return response()->json(['message' => 'Tim deleted successfully']);
    }

    // Add more methods as needed for your application
}
