<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcaraPengoperasianJTR extends Model
{
    use HasFactory;
     
    public $table ="berita_acara_pengoperasian_jtr";

    protected $fillable = [
        'id_jtr',
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
        'nama_gardu',
        'id_cabletype',
        'phase',
        'spec_cablesize',
        'cable_length',
        'spec_pole',
        'jtr_type',
        'sumofpole',
        'jurusan_gardu',
        'insulation_r_body',
        'insulation_s_body',
        'insulation_t_body',
        'earthneutral',
        'pengawas',
        'pelaksana',
        'manager_ulp',
    ];

    public function dataAsetJTR()
    {
        return $this->belongsTo(DataAsetJTR::class, 'id_jtr');
    }
}
