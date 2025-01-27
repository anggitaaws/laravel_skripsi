<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcaraPengoperasian_GD extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nomor_berita_acara',
        'tanggal',
    ];
    
}
