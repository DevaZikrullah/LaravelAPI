<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    use HasFactory;

    protected $fillable = [
        'stok',
        'mesin',
        'tipe_suspensi',
        'tipe_transmisi',
        'kendaraan'
    ];
}
