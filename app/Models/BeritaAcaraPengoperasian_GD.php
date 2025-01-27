<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcaraPengoperasian_GD extends Model
{
    use HasFactory;

    public $table = 'berita_acara_pengoperasian_gd'; 

    protected $fillable = [
        'judul',
        'nomor_berita_acara',
        'tanggal',
    ];

    public function input()
    {
        return $this->hasMany(DataAsetGardu::class);
    }
    
}
