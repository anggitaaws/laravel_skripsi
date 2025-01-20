<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataAsetJTM extends Model
{
    use HasFactory;

    public $table = "data_aset_jtm";

    protected $fillable = [
        'ulp',
        'id_cabletype',
        'location',
        'penyulang',
        'section',
        'segment',
        'phase',
        'cable_length',
        'spec_cablesize',
        'spec_pole',
        'spec_consule',
        'height_pole',
        'spec_circuit',
        'segment1',
        'segment2'
    ];
}
