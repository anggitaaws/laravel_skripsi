<?php

namespace App\Http\Controllers\BeritaAcaraPengoperasianJTR;

use App\Exports\BeritaAcaraPengoperasianJTRExport;
use App\Http\Controllers\Controller;
use App\Models\BeritaAcaraPengoperasianJTR;
use App\Models\DataAsetJTR;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class BeritaAcaraPengoperasianJTRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita_acara_pengoperasian_jtr = BeritaAcaraPengoperasianJTR::orderBy('created_at','ASC')->get();
        return view('BeritaAcaraPengoperasian_JTR.index',compact('berita_acara_pengoperasian_jtr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BeritaAcaraPengoperasian_JTR.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //Validasi request
         $validated = $request->validate([
            'nomor_berita_acara' => 'required',
            'tanggal' => 'required',
            'ulp' => 'required',
            'no_spbj' => 'required',
            'location' => 'required',
            'penyulang' => 'required',
            'keypoint' => 'required',
            'section' => 'required',
            'segment' => 'required',
            'nama_gardu' => 'required',
            'id_cabletype' => 'required',
            'phase' => 'required',
            'spec_cablesize' => 'required',
            'cable_length' => 'required',
            'spec_pole' => 'required',
            'jtr_type' => 'required',
            'sumofpole' => 'required',
            'jurusan_gardu' => 'required',
        ]);

         //Menyimpan data ke BeritaAcaraPengoperasianJTR
         $berita_acara_pengoperasian_jtr = BeritaAcaraPengoperasianJTR::create([
            'nomor_berita_acara' => $request->input('nomor_berita_acara'),
            'tanggal' => $request->input('tanggal'),
            'ulp' => $request->input('ulp'),
            'no_spbj' => $request->input('no_spbj'),
            'vendor' => $request->input('vendor'),
            'location' => $request->input('location'),
            'initial_coordinates' => $request->input('initial_coordinates'),
            'final_coordinates' => $request->input('final_coordinates'),
            'penyulang'=> $request->input('penyulang'),
            'keypoint' => $request->input('keypoint'),
            'section' => $request->input('section'),
            'segment' => $request->input('segment'),
            'nama_gardu' => $request->input('nama_gardu'),
            'id_cabletype' => $request->input('id_cabletype'),
            'phase' => $request->input('phase'),
            'spec_cablesize' => $request->input('spec_cablesize'),
            'cable_length' => $request->input('cable_length'),
            'spec_pole' => $request->input('spec_pole'),
            'jtr_type' => $request->input('jtr_type'),
            'sumofpole' => $request->input('sumofpole'),
            'jurusan_gardu' => $request->input('jurusan_gardu'),
            'insulation_r_body' => $request->input('insulation_r_body'),
            'insulation_s_body' => $request->input('insulation_s_body'),
            'insulation_t_body' => $request->input('insulation_t_body'),
            'insulation_r_r' => $request->input('insulation_r_r'),
            'insulation_s_s' => $request->input('insulation_s_s'),
            'insulation_t_t' => $request->input('insulation_t_t'),
            'earthneutral' => $request->input('eartneutral'),
            ]);

            //Menyimpan data ke DataAsetGardu
        DataAsetJTR::create([
           'nomor_berita_acara' => $request->input('nomor_berita_acara'),
            'tanggal' => $request->input('tanggal'),
            'ulp' => $request->input('ulp'),
            'no_spbj' => $request->input('no_spbj'),
            'vendor' => $request->input('vendor'),
            'location' => $request->input('location'),
            'initial_coordinates' => $request->input('initial_coordinates'),
            'final_coordinates' => $request->input('final_coordinates'),
            'penyulang'=> $request->input('penyulang'),
            'keypoint' => $request->input('keypoint'),
            'section' => $request->input('section'),
            'segment' => $request->input('segment'),
            'nama_gardu' => $request->input('nama_gardu'),
            'id_cabletype' => $request->input('id_cabletype'),
            'phase' => $request->input('phase'),
            'spec_cablesize' => $request->input('spec_cablesize'),
            'cable_length' => $request->input('cable_length'),
            'spec_pole' => $request->input('spec_pole'),
            'jtr_type' => $request->input('jtr_type'),
            'sumofpole' => $request->input('sumofpole'),
            'jurusan_gardu' => $request->input('jurusan_gardu'),
            'insulation_r_body' => $request->input('insulation_r_body'),
            'insulation_s_body' => $request->input('insulation_s_body'),
            'insulation_t_body' => $request->input('insulation_t_body'),
            'insulation_r_r' => $request->input('insulation_r_r'),
            'insulation_s_s' => $request->input('insulation_s_s'),
            'insulation_t_t' => $request->input('insulation_t_t'),
            'earthneutral' => $request->input('eartneutral'),
        ]);

        return redirect()->route('BeritaAcaraPengoperasianJTR')->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita_acara_pengoperasian_jtr = BeritaAcaraPengoperasianJTR::findOrFail($id);
        return view('BeritaAcaraPengoperasian_JTR.show',compact('berita_acara_pengoperasian_jtr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita_acara_pengoperasian_jtr = BeritaAcaraPengoperasianJTR::findOrFail($id);
        return view('BeritaAcaraPengoperasian_JTR.edit',compact('berita_acara_pengoperasian_jtr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita_acara_pengoperasian_jtr = BeritaAcaraPengoperasianJTR::findOrFail($id);

        //Validasi request
        $validated = $request->validate([
            'nomor_berita_acara' => 'required',
            'tanggal' => 'required',
            'ulp' => 'required',
            'no_spbj' => 'required',
            'location' => 'required',
            'penyulang' => 'required',
            'keypoint' => 'required',
            'section' => 'required',
            'segment' => 'required',
            'nama_gardu' => 'required',
            'id_cabletype' => 'required',
            'phase' => 'required',
            'spec_cablesize' => 'required',
            'cable_length' => 'required',
            'spec_pole' => 'required',
            'jtr_type' => 'required',
            'sumofpole' => 'required',
            'jurusan_gardu' => 'required',
        ]);

         //Menyimpan data ke BeritaAcaraPengoperasianJTR
         $berita_acara_pengoperasian_jtr->update([
            'nomor_berita_acara' => $request->input('nomor_berita_acara'),
            'tanggal' => $request->input('tanggal'),
            'ulp' => $request->input('ulp'),
            'no_spbj' => $request->input('no_spbj'),
            'vendor' => $request->input('vendor'),
            'location' => $request->input('location'),
            'initial_coordinates' => $request->input('initial_coordinates'),
            'final_coordinates' => $request->input('final_coordinates'),
            'penyulang'=> $request->input('penyulang'),
            'keypoint' => $request->input('keypoint'),
            'section' => $request->input('section'),
            'segment' => $request->input('segment'),
            'nama_gardu' => $request->input('nama_gardu'),
            'id_cabletype' => $request->input('id_cabletype'),
            'phase' => $request->input('phase'),
            'spec_cablesize' => $request->input('spec_cablesize'),
            'cable_length' => $request->input('cable_length'),
            'spec_pole' => $request->input('spec_pole'),
            'jtr_type' => $request->input('jtr_type'),
            'sumofpole' => $request->input('sumofpole'),
            'jurusan_gardu' => $request->input('jurusan_gardu'),
            'insulation_r_body' => $request->input('insulation_r_body'),
            'insulation_s_body' => $request->input('insulation_s_body'),
            'insulation_t_body' => $request->input('insulation_t_body'),
            'insulation_r_r' => $request->input('insulation_r_r'),
            'insulation_s_s' => $request->input('insulation_s_s'),
            'insulation_t_t' => $request->input('insulation_t_t'),
            'earthneutral' => $request->input('eartneutral'),
            ]);

            //Menyimpan data ke DataAsetJTR
            $data_aset_jtr = DataAsetJTR::where('nomor_berita_acara', $berita_acara_pengoperasian_jtr->nomor_berita_acara)->first();
            if ($data_aset_jtr) {
            $data_aset_jtr->update([
           'nomor_berita_acara' => $request->input('nomor_berita_acara'),
            'tanggal' => $request->input('tanggal'),
            'ulp' => $request->input('ulp'),
            'no_spbj' => $request->input('no_spbj'),
            'vendor' => $request->input('vendor'),
            'location' => $request->input('location'),
            'initial_coordinates' => $request->input('initial_coordinates'),
            'final_coordinates' => $request->input('final_coordinates'),
            'penyulang'=> $request->input('penyulang'),
            'keypoint' => $request->input('keypoint'),
            'section' => $request->input('section'),
            'segment' => $request->input('segment'),
            'nama_gardu' => $request->input('nama_gardu'),
            'id_cabletype' => $request->input('id_cabletype'),
            'phase' => $request->input('phase'),
            'spec_cablesize' => $request->input('spec_cablesize'),
            'cable_length' => $request->input('cable_length'),
            'spec_pole' => $request->input('spec_pole'),
            'jtr_type' => $request->input('jtr_type'),
            'sumofpole' => $request->input('sumofpole'),
            'jurusan_gardu' => $request->input('jurusan_gardu'),
            'insulation_r_body' => $request->input('insulation_r_body'),
            'insulation_s_body' => $request->input('insulation_s_body'),
            'insulation_t_body' => $request->input('insulation_t_body'),
            'insulation_r_r' => $request->input('insulation_r_r'),
            'insulation_s_s' => $request->input('insulation_s_s'),
            'insulation_t_t' => $request->input('insulation_t_t'),
            'earthneutral' => $request->input('eartneutral'),
        ]);
        return redirect()->route('BeritaAcaraPengoperasianJTR')->with('success','Data Berhasil Diupdate');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $berita_acara_pengoperasian_jtr = BeritaAcaraPengoperasianJTR::findOrFail($id);
        $berita_acara_pengoperasian_jtr->delete();
        $data_aset_jtr = DataAsetJTR::where('nomor_berita_acara',$berita_acara_pengoperasian_jtr->nomor_berita_acara)->first();
        if ($data_aset_jtr){
            $data_aset_jtr->delete();
        }
        return redirect()->route('BeritaAcaraPengoperasianJTR')->with('success', 'Berita Acara Pengoperasian JTR Berhasil Dihapus');
    }

    public function downloadExcel($id)
    {
        $berita_acara_pengoperasian_jtr = BeritaAcaraPengoperasianJTR::find($id);

        return Excel::download(new BeritaAcaraPengoperasianJTRExport($berita_acara_pengoperasian_jtr), 'berita_acara_pengoperasian_jtr.xlsx');
    }

    public function downloadPdf($id, Request $request)
    {
        $berita_acara_pengoperasian_jtr= BeritaAcaraPengoperasianJTR::find($id);
        $berita_acara_pengoperasian_jtr->pelaksana = $request->input('pelaksana','........');
        $berita_acara_pengoperasian_jtr->pengawas = $request->input('pengawas','........');
        $berita_acara_pengoperasian_jtr->manager = $request->input('manager','........');

        $pdf = Pdf::loadView('BeritaAcaraPengoperasian_JTR.pdf',compact('berita_acara_pengoperasian_jtr'));

        return $pdf->download('berita_acara_pengoperasian_jtr.pdf');
       
    }
}
