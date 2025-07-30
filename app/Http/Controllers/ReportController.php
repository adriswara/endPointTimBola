<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    // Your methods for handling Report-related requests will go here
    // For example:

    public function showAll()
    {
        $results = DB::table('skor')
            ->join('jadwal', 'skor.idJadwal', '=', 'jadwal.id')
            ->select(
                'skor.totalSkor',
                'skor.pemainYangMencetakGol',
                'skor.waktuTerjadinyaGol',
                'jadwal.tanggalPertandingan',
                'jadwal.timRumah',
                'jadwal.timTamu',
                'jadwal.waktuPertandingan',
                DB::raw('(SELECT SUM(s.totalSkor) FROM skor s WHERE s.idTim = jadwal.timRumah) as totalkemenanganhome'),
                DB::raw('(SELECT SUM(s2.totalSkor) FROM skor s2 WHERE s2.idTim = jadwal.timTamu) as totalkemenanganaway'),
                DB::raw('IF(
                (SELECT SUM(s.totalSkor) FROM skor s WHERE s.idTim = jadwal.timRumah) > 
                (SELECT SUM(s2.totalSkor) FROM skor s2 WHERE s2.idTim = jadwal.timTamu),
                "Tim Home Menang",
                "Tim Away Menang"
            ) as statusKemenangan')
            )
            ->get();

        return response()->json($results);
    }

    public function show($id)
    {
        // Logic to retrieve and return a specific report by ID
    }

    // Add more methods as needed for your application
}
