<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAsetJTR extends Model
{
    use HasFactory;

    public $table = "data_aset_jtr";

    protected $fillable = [
        'ulp',
        'id_CableType',
        'location',
        'segment',
        'spec_fabrication',
        'cable_length',
        'spec_CableSize',
        'NumberofPole'
    ];
}
