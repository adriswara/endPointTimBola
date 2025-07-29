<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    protected $table = 'tim';
    protected $fillable = [
        'namaTim',
        'logoTim',
        'tahunBerdiri',
        'alamatMarkas',
        'kotaMarkas',
    ];
}
