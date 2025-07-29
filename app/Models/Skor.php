<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    protected $table = 'skor';

    protected $fillable = [
        'totalSkor',
        'pemainYangMencetakGol',
        'waktuTerjadinyaGol',
        'idJadwal',
        'idTim',
    ];
}
