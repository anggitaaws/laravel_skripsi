<?php

namespace App\Http\Controllers\BeritaAcaraPengoperasianJTR;

use App\Http\Controllers\Controller;
use App\Models\BeritaAcaraPengoperasianJTR;
use App\Models\DataAsetJTR;
use Illuminate\Http\Request;

class BeritaAcaraPengoperasianJTRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_aset_jtr = BeritaAcaraPengoperasianJTR::orderBy('created_at','ASC')->get();
        return view('BeritaAcaraPengoperasian_JTR.index',compact('data_aset_jtr'));
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
         BeritaAcaraPengoperasianJTR::create([
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
            'cable-length' => $request->input('cable_length'),
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
            'cable-length' => $request->input('cable_length'),
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
