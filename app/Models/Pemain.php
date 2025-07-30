<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    protected $table = 'pemain';

    protected $fillable = [
        'idTim', 
        'namaPemain',
        'tinggiBadan',
        'beratBadan',
        'posisiPemain',
        'nomorPunggung',
    ];

    public function tim()
    {
        return $this->belongsTo('App\Models\Tim', 'idTim');
    }
}
