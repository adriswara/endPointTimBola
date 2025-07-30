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
            ->join('pemain', 'skor.pemainYangMencetakGol', '=', 'pemain.id')
            ->select(
                'skor.totalSkor',
                'skor.pemainYangMencetakGol',
                'skor.waktuTerjadinyaGol',
                'jadwal.tanggalPertandingan',
                'jadwal.timRumah',
                'jadwal.timTamu',
                'jadwal.waktuPertandingan',
                'pemain.idTim',
                DB::raw('(SELECT SUM(totalSkor) FROM skor WHERE idTim = jadwal.timRumah AND idJadwal = jadwal.id) as kemenanganHome'),
                DB::raw('(SELECT SUM(totalSkor) FROM skor WHERE idTim = jadwal.timTamu AND idJadwal = jadwal.id) as kemenganganTamu'),
                DB::raw('CASE
                WHEN (SELECT SUM(totalSkor) FROM skor WHERE idTim = jadwal.timRumah AND idJadwal = jadwal.id) > 
                     (SELECT SUM(totalSkor) FROM skor WHERE idTim = jadwal.timTamu AND idJadwal = jadwal.id)
                    THEN "Home Menang"
                WHEN (SELECT SUM(totalSkor) FROM skor WHERE idTim = jadwal.timRumah AND idJadwal = jadwal.id) < 
                     (SELECT SUM(totalSkor) FROM skor WHERE idTim = jadwal.timTamu AND idJadwal = jadwal.id)
                    THEN "Tamu Menang"
                ELSE "Seri"
            END as hasiltanding')
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
