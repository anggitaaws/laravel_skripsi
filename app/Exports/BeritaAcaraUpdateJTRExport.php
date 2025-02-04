<?php

namespace App\Exports;

use App\Models\BeritaAcaraUpdateJTR;
use App\Models\DataAsetJTR;
use Maatwebsite\Excel\Concerns\FromView;

class BeritaAcaraUpdateJTREXport implements FromView
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): \Illuminate\Contracts\View\View
    {
        // Ambil data berita acara dan data aset gardu berdasarkan ID
        $berita_acara_update_jtr = BeritaAcaraUpdateJTR::findOrFail($this->id);
        $data_aset_jtr = DataAsetJTR::where('id_jtr', $berita_acara_update_jtr->id_jtr)->first();

        return view('BeritaAcaraUpdate_JTR.unduh', compact('berita_acara_update_jtr', 'data_aset_jtr'));
    }
}
