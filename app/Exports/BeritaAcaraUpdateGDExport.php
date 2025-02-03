<?php

namespace App\Exports;

use App\Models\DataAsetGardu;
use App\Models\BeritaAcaraUpdateGD;
use Maatwebsite\Excel\Concerns\FromView;

class BeritaAcaraUpdateGDExport implements FromView
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): \Illuminate\Contracts\View\View
    {
        // Ambil data berita acara dan data aset gardu berdasarkan ID
        $berita_acara_update_gd = BeritaAcaraUpdateGD::findOrFail($this->id);
        $data_aset_gardu = DataAsetGardu::where('id_gardu', $berita_acara_update_gd->id_gardu)->first();

        return view('BeritaAcaraUpdate_GD.unduh', compact('berita_acara_update_gd', 'data_aset_gardu'));
    }
}
