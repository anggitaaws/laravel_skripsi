<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcaraPengoperasianJTM extends Model
{
    use HasFactory;

    public $table = "berita_acara_pengoperasian_jtr";

    protected $fillable = [
        'nomor_berita_acara',
        'tanggal',
        'ulp',
        'no_spbj',
        'vendor',
        'location',
        'initial_coordinates',
        'final_coordinates',
        'penyulang',
        'section',
        'segment',
        'id_cabletype',
        'phase',
        'spec_cablesize',
        'cable_length',
        'spec_pole',
        'spec_consule',
        'height_pole',
        'spec_circuit',
        'segment1',
        'segment2',
        'environment',
        'insulation_r_body',
        'insulation_s_body',
        'insulation_t_body',
    ];
}
