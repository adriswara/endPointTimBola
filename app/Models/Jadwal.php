<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    use SoftDeletes;
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
