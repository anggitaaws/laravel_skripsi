<?php

namespace App\Http\Controllers\BeritaAcaraUpdateJTR;

use App\Models\DataAsetJTR;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use App\Models\BeritaAcaraUpdateJTR;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BeritaAcaraUpdateJTRExport;
use Carbon\Carbon;

class BeritaAcaraUpdateJTRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita_acara_update_jtr = BeritaAcaraUpdateJTR::orderBy('created_at','ASC')->get();
        return view('BeritaAcaraUpdate_JTR.index',compact('berita_acara_update_jtr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_aset_jtr = DataAsetJTR::all();
        return view('BeritaAcaraUpdate_JTR.create',compact('data_aset_jtr'));
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
         $berita_acara_update_jtr = BeritaAcaraUpdateJTR::create([
            'id_jtr' => $request->input('id_jtr'),
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
            'earthneutral' => $request->input('earthneutral'),
            'pengawas' => $request->input('pengawas'),
            'pelaksana' => $request->input('pelaksana'),
            'manager_ulp' => $request->input('manager_ulp'),
            ]);

            //Menyimpan data ke DataAsetGardu
        DataAsetJTR::create([
            'id_jtr' => $request->input('id_jtr'),
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
            'earthneutral' => $request->input('earthneutral'),
        ]);

        return redirect()->route('BeritaAcaraUpdateJTR')->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita_acara_update_jtr = BeritaAcaraUpdateJTR::findOrFail($id);
        return view('BeritaAcaraUpdate_JTR.show',compact('berita_acara_update_jtr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita_acara_update_jtr = BeritaAcaraUpdateJTR::findOrFail($id);
        return view('BeritaAcaraUpdate_JTR.edit',compact('berita_acara_update_jtr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita_acara_update_jtr = BeritaAcaraUpdateJTR::findOrFail($id);

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

         //Menyimpan data ke BeritaAcaraUpdateJTR
         $berita_acara_update_jtr->update([
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
            'earthneutral' => $request->input('earthneutral'),
            'pengawas' => $request->input('pengawas'),
            'pelaksana' => $request->input('pelaksana'),
            'manager_ulp' => $request->input('manager_ulp'),
            ]);

            //Menyimpan data ke DataAsetJTR
            $data_aset_jtr = DataAsetJTR::where('nomor_berita_acara', $berita_acara_update_jtr->nomor_berita_acara)->first();
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
            'earthneutral' => $request->input('earthneutral'),
        ]);
        return redirect()->route('BeritaAcaraUpdateJTR')->with('success','Data Berhasil Diupdate');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita_acara_update_jtr = BeritaAcaraUpdateJTR::findOrFail($id);
        $berita_acara_update_jtr->delete();
        $data_aset_jtr = DataAsetJTR::where('nomor_berita_acara',$berita_acara_update_jtr->nomor_berita_acara)->first();
        if ($data_aset_jtr){
            $data_aset_jtr->delete();
        }
        return redirect()->route('BeritaAcaraUpdateJTR')->with('success', 'Berita Acara Penggantian JTR Berhasil Dihapus');
    }

    public function downloadPdf($id, Request $request)
    {
        $berita_acara_update_jtr= BeritaAcaraUpdateJTR::find($id);
        $data_aset_jtr = DataAsetJTR::where('id_jtr', $berita_acara_update_jtr->id_jtr)
        ->oldest('updated_at')
        ->oldest('created_at')
        ->first();

        Carbon::setLocale('id');

        $pdf = Pdf::loadView('BeritaAcaraUpdate_JTR.pdf',compact('berita_acara_update_jtr','data_aset_jtr'));
        


        return $pdf->download('berita_acara_penggantian_jtr.pdf');
    }

    public function downloadExcel($id)
    {
        Carbon::setLocale('id');
        return Excel::download(new BeritaAcaraUpdateJTRExport($id), 'berita_acara_penggantian_jtr.xlsx');
    }
}
