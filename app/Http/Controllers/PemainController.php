<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Skor;
use Illuminate\Http\Request;

class PemainController extends Controller
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

    // Add more methods as needed for your application
}
