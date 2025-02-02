<?php

namespace App\Http\Controllers\BeritaAcaraUpdateGD;

use Illuminate\Http\Request;
use App\Models\BeritaAcaraUpdateGD;
use App\Http\Controllers\Controller;
use App\Models\DataAsetGardu;

class BeritaAcaraUpdateGDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita_acara_update_gd = BeritaAcaraUpdateGD::orderBy('created_at','ASC')->get();
        return view('BeritaAcaraUpdate_GD.index',compact('berita_acara_update_gd'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_aset_gardu = DataAsetGardu::all();
        return view('BeritaAcaraUpdate_GD.create',compact('data_aset_gardu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Ambil nilai latitude dan longitude dari request
    $berita_acara_update_gd = $request->input('latitude');
    $berita_acara_update_gd= $request->input('longitude');

    // Menghapus angka 0 ekstra setelah desimal

        //Validasi request
        $validated = $request->validate([
            'nomor_berita_acara' => 'required',
            'tanggal' => 'required',
            'name' => 'required',
            'no_spbj' => 'required',
            'ulp' => 'required',
            'id_transpower' => 'required',
            'phase' => 'required',
            'location' => 'required',
            'penyulang' => 'required',
            'keypoint' => 'required',
            'section' => 'required',
            'segment' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'vendor' => 'required',
            'construction' => 'required',
            'serial_number' => 'required',
            'impedance' => 'required',
            'standar' => 'required',
            'bahan_belitan' => 'required'
        ]);

        //Menyimpan data ke BeritaAcaraPengoperasianGD
        $berita_acara_update_gd = BeritaAcaraUpdateGD::create([
        'id_gardu' => $request->input('id_gardu'),
        'nomor_berita_acara' => $request->input('nomor_berita_acara'),
        'tanggal' => $request->input('tanggal'),
        'ulp' => $request->input('ulp'),
        'no_spbj' => $request->input('no_spbj'),
        'vendor' => $request->input('vendor'),
        'name' => $request->input('name'),
        'location' => $request->input('location'),
        'latitude' => $request->input('latitude'),
        'longitude' => $request->input('longitude'),
        'penyulang' => $request->input('penyulang'),
        'keypoint' => $request->input('keypoint'),
        'section' => $request->input('section'),
        'segment' => $request->input('segment'),
        'construction' => $request->input('construction'),
        'phase' => $request->input('phase'),
        'spec_fabrication' => $request->input('spec_fabrication'),
        'serial_number' => $request->input('serial_number'),
        'id_transpower' => $request->input('id_transpower'),
        'spec_oilweight' => $request->input('spec_oilweight'),
        'spec_transweight' => $request->input('spec_transweight'),
        'impedance' => $request->input('impedance'),
        'spec_wiring' => $request->input('spec_wiring'),
        'spec_transtap' => $request->input('spec_transtap'),
        'standar' => $request->input('standar'),
        'bahan_belitan' => $request->input('bahan_belitan'),
        'spec_cooling_type' => $request->input('spec_cooling_type'),
        'spec_transtap1' => $request->input('spec_transtap1'),
        'spec_current' => $request->input('spec_current'),
        'spec_voltage' => $request->input('spec_voltage'),
        'temperature' => $request->input('temperature'),
        'spec_year' => $request->input('spec_year'),
        'trafo_load' => $request->input('trafo_load'),
        'information' => $request->input('information'),
        'insulation_r_body' => $request->input('insulation_r_body'),
        'insulation_s_body' => $request->input('insulation_s_body'),
        'insulation_t_body' => $request->input('insulation_t_body'),
        'earthneutral' => $request->input('earthneutral'),
        'earthla' => $request->input('earthla'),
        'earthbody' => $request->input('earthbody'),
        'insulation_R_r' => $request->input('insulation_R_r'),
        'insulation_S_s' => $request->input('insulation_S_s'),
        'insulation_T_t' => $request->input('insulation_T_t'),
        ]);

        //Menyimpan data ke DataAsetGardu
        DataAsetGardu::create([
            'id_gardu' => $request->input('id_gardu'),
            'nomor_berita_acara' => $request->input('nomor_berita_acara'),
            'tanggal' => $request->input('tanggal'),
            'ulp' => $request->input('ulp'),
            'no_spbj' => $request->input('no_spbj'),
            'vendor' => $request->input('vendor'),
            'name' => $request->input('name'),
            'location' => $request->input('location'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'penyulang' => $request->input('penyulang'),
            'keypoint' => $request->input('keypoint'),
            'section' => $request->input('section'),
            'segment' => $request->input('segment'),
            'construction' => $request->input('construction'),
            'phase' => $request->input('phase'),
            'spec_fabrication' => $request->input('spec_fabrication'),
            'serial_number' => $request->input('serial_number'),
            'id_transpower' => $request->input('id_transpower'),
            'spec_oilweight' => $request->input('spec_oilweight'),
            'spec_transweight' => $request->input('spec_transweight'),
            'impedance' => $request->input('impedance'),
            'spec_wiring' => $request->input('spec_wiring'),
            'spec_transtap' => $request->input('spec_transtap'),
            'standar' => $request->input('standar'),
            'bahan_belitan' => $request->input('bahan_belitan'),
            'spec_cooling_type' => $request->input('spec_cooling_type'),
            'spec_transtap1' => $request->input('spec_transtap1'),
            'spec_current' => $request->input('spec_current'),
            'spec_voltage' => $request->input('spec_voltage'),
            'temperature' => $request->input('temperature'),
            'spec_year' => $request->input('spec_year'),
            'trafo_load' => $request->input('trafo_load'),
            'information' => $request->input('information'),
            'insulation_r_body' => $request->input('insulation_r_body'),
            'insulation_s_body' => $request->input('insulation_s_body'),
            'insulation_t_body' => $request->input('insulation_t_body'),
            'earthneutral' => $request->input('earthneutral'),
            'earthla' => $request->input('earthla'),
            'earthbody' => $request->input('earthbody'),
            'insulation_R_r' => $request->input('insulation_R_r'),
            'insulation_S_s' => $request->input('insulation_S_s'),
            'insulation_T_t' => $request->input('insulation_T_t'),
        ]);
        return redirect()->route('BeritaAcaraUpdateGD')->with('success', 'Data berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita_acara_update_gd = BeritaAcaraUpdateGD::findOrFail($id);
        $data_aset_gardu = DataAsetGardu::findOrFail($berita_acara_update_gd->id_gardu);
        return view('BeritaAcaraUpdate_GD.show',compact('berita_acara_update_gd', 'data_aset_gardu'));
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
