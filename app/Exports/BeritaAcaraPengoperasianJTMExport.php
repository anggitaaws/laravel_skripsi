<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BeritaAcaraPengoperasianJTMExport implements FromView
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('BeritaAcaraPengoperasian_JTM.unduh', ['berita_acara_pengoperasian_jtm' => $this->data]);
    }
}
