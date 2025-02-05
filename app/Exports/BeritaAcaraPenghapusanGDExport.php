<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BeritaAcaraPenghapusanGDExport implements FromView
{
        protected $data;

        public function __construct($data)
        {
            $this->data = $data;
        }
    
        public function view(): View
        {
            return view('BeritaAcaraPenghapusan_GD.unduh', ['berita_acara_penghapusan_gd' => $this->data]);
        }
}
