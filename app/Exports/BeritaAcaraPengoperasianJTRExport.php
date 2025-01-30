<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BeritaAcaraPengoperasianJTRExport implements FromView
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('BeritaAcaraPengoperasian_JTR.unduh', ['berita_acara_pengoperasian_jtr' => $this->data]);
    }
   
}
