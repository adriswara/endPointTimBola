<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    protected $table = 'pemain';

    protected $fillable = [
        'namaPemain',
        'tinggiBadan',
        'beratBadan',
        'posisiPemain',
        'nomorPunggung',
        'idTim', // Assuming you want to include this field
    ];

    public function tim()
    {
        return $this->belongsTo('App\Models\Tim', 'idTim');
    }
}
