<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAsetGardu extends Model
{
    use HasFactory;

    public $table = "data_aset_gardu";

    protected $fillable = [
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
    ];

    public function BAPengoperasian_GD()
    {
        return $this->belongsTo(BeritaAcaraPengoperasian_GD::class);
    }
}
