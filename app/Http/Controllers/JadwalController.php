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

    // Add more methods as needed for your application
}
