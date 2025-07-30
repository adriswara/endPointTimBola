<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'tanggalPertandingan',
        'waktuPertandingan',
        'timRumah',
        'timTamu',
    ];

    public function timHome()
    {
        return $this->belongsTo('App\Models\Tim', 'timHome');
    }

    public function timAway()
    {
        return $this->belongsTo('App\Models\Tim', 'timAway');
    }
}
