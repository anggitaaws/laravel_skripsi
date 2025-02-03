<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcaraPengoperasianGD extends Model
{
    use HasFactory;

    public $table = "berita_acara_pengoperasian_gd";

    protected $fillable = [
        'id_gardu',
        'nomor_berita_acara',
        'tanggal',
        'name',
        'ulp',
        'id_transpower',
        'phase',
        'location',
        'penyulang',
        'keypoint',
        'section',
        'segment',
        'latitude',
        'longitude',
        'spec_fabrication',
        'spec_transtap',
        'spec_voltage',
        'spec_year',
        'spec_wiring',
        'spec_cooling_type',
        'spec_oilweight',
        'spec_transweight',
        'no_spbj',
        'vendor',
        'construction',
        'serial_number',
        'impedance',
        'standar',
        'bahan_belitan',
        'spec_transtap1',
        'spec_current',
        'temperature',
        'trafo_load',
        'information',
        'insulation_r_body',
        'insulation_s_body',
        'insulation_t_body',
        'earthneutral',
        'earthla',
        'earthbody',
        'insulation_R_r',
        'insulation_S_s',
        'insulation_T_t',
    ];

    public function dataAsetGardu()
    {
        return $this->belongsTo(DataAsetGardu::class, 'id_gardu');
    }
}
