<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skor extends Model
{
    use SoftDeletes;
    protected $table = 'skor';

    protected $fillable = [
        'totalSkor',
        'pemainYangMencetakGol',
        'waktuTerjadinyaGol',
        'idJadwal',
    ];
    protected $dates = [
        'deleted_at',
    ];
}
