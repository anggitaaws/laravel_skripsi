<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataAsetJTM extends Model
{
    use HasFactory;

    public $table = "data_aset_jtm";

    protected $fillable = [
        'id_jtm',
        'nomor_berita_acara',
        'tanggal',
        'ulp',
        'no_spbj',
        'vendor',
        'location',
        'initial_coordinates',
        'final_coordinates',
        'penyulang',
        'keypoint',
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

    public function beritaAcaraUpdateJTM()
    {
        return $this->hasMany(BeritaAcaraUpdateJTM::class);
    }

    public function beritaAcaraPengoperasianJTM()
    {
        return $this->hasMany(BeritaAcaraPengoperasianJTM::class);
    }
}
