<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemain extends Model
{
    use SoftDeletes;
    protected $table = 'pemain';

    protected $fillable = [
        'idTim',
        'namaPemain',
        'tinggiBadan',
        'beratBadan',
        'posisiPemain',
        'nomorPunggung',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function tim()
    {
        return $this->belongsTo('App\Models\Tim', 'idTim');
    }
}
