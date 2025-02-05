<?php

namespace App\Exports;

use App\Models\BeritaAcaraUpdateJTM;
use App\Models\DataAsetJTM;
use Maatwebsite\Excel\Concerns\FromView;

class BeritaAcaraUpdateJTMExport implements FromView
{
    protected $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): \Illuminate\Contracts\View\View
    {
        // Ambil data berita acara dan data aset gardu berdasarkan ID
        $berita_acara_update_jtm = BeritaAcaraUpdateJTM::findOrFail($this->id);
        $data_aset_jtm = DataAsetJTM::where('id_jtm', $berita_acara_update_jtm->id_jtm)->first();

        return view('BeritaAcaraUpdate_JTM.unduh', compact('berita_acara_update_jtm', 'data_aset_jtm'));
    }
}
