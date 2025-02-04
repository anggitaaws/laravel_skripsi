<?php

namespace App\Http\Controllers\BeritaAcaraPengoperasianJTM;

use App\Models\DataAsetJTM;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\BeritaAcaraPengoperasianJTM;
use App\Exports\BeritaAcaraPengoperasianJTMExport;

class BeritaAcaraPengoperasianJTMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita_acara_pengoperasian_jtm = BeritaAcaraPengoperasianJTM::orderBy('created_at','ASC')->get();
        return view('BeritaAcaraPengoperasian_JTM.index',compact('berita_acara_pengoperasian_jtm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BeritaAcaraPengoperasian_JTM.create');
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
                'id_cabletype' => 'required',
                'phase' => 'required',
                'spec_cablesize' => 'required',
                'cable_length' => 'required',
                'spec_pole' => 'required',
                'spec_consule' => 'required',
                'height_pole' => 'required',
                'spec_circuit' => 'required',
                'segment1' => 'required',
                'segment2' => 'required',
                'environment' => 'required',
            ]);

             //Menyimpan data ke BeritaAcaraPengoperasianJTM
         $berita_acara_pengoperasian_jtm = BeritaAcaraPengoperasianJTM::create([
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
            'id_cabletype' => $request->input('id_cabletype'),
            'phase' => $request->input('phase'),
            'spec_cablesize' => $request->input('spec_cablesize'),
            'cable_length' => $request->input('cable_length'),
            'spec_pole' => $request->input('spec_pole'),
            'spec_consule' => $request->input('spec_consule'),
            'height_pole' => $request->input('height_pole'),
            'spec_circuit' => $request->input('spec_circuit'),
            'segment1' => $request->input('segment1'),
            'segment2' => $request->input('segment2'),
            'environment' => $request->input('environment'),
            'insulation_r_body' => $request->input('insulation_r_body'),
            'insulation_s_body' => $request->input('insulation_s_body'),
            'insulation_t_body' => $request->input('insulation_t_body'),
            ]);

            DataAsetJTM::create([
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
            'id_cabletype' => $request->input('id_cabletype'),
            'phase' => $request->input('phase'),
            'spec_cablesize' => $request->input('spec_cablesize'),
            'cable_length' => $request->input('cable_length'),
            'spec_pole' => $request->input('spec_pole'),
            'spec_consule' => $request->input('spec_consule'),
            'height_pole' => $request->input('height_pole'),
            'spec_circuit' => $request->input('spec_circuit'),
            'segment1' => $request->input('segment1'),
            'segment2' => $request->input('segment2'),
            'environment' => $request->input('environment'),
            'insulation_r_body' => $request->input('insulation_r_body'),
            'insulation_s_body' => $request->input('insulation_s_body'),
            'insulation_t_body' => $request->input('insulation_t_body'),
            ]);

            return redirect()->route('BeritaAcaraPengoperasianJTM')->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita_acara_pengoperasian_jtm = BeritaAcaraPengoperasianJTM::findOrFail($id);
        return view('BeritaAcaraPengoperasian_JTM.show',compact('berita_acara_pengoperasian_jtm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita_acara_pengoperasian_jtm = BeritaAcaraPengoperasianJTM::findOrFail($id);
        return view('BeritaAcaraPengoperasian_JTM.edit',compact('berita_acara_pengoperasian_jtm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita_acara_pengoperasian_jtm = BeritaAcaraPengoperasianJTM::findOrFail($id);

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
            'id_cabletype' => 'required',
            'phase' => 'required',
            'spec_cablesize' => 'required',
            'cable_length' => 'required',
            'spec_pole' => 'required',
            'spec_consule' => 'required',
            'height_pole' => 'required',
            'spec_circuit' => 'required',
            'segment1' => 'required',
            'segment2' => 'required',
            'environment' => 'required',
        ]);

            //Menyimpan data ke BeritaAcaraPengoperasianJTM
         $berita_acara_pengoperasian_jtm->update([
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
            'id_cabletype' => $request->input('id_cabletype'),
            'phase' => $request->input('phase'),
            'spec_cablesize' => $request->input('spec_cablesize'),
            'cable_length' => $request->input('cable_length'),
            'spec_pole' => $request->input('spec_pole'),
            'spec_consule' => $request->input('spec_consule'),
            'height_pole' => $request->input('height_pole'),
            'spec_circuit' => $request->input('spec_circuit'),
            'segment1' => $request->input('segment1'),
            'segment2' => $request->input('segment2'),
            'environment' => $request->input('environment'),
            'insulation_r_body' => $request->input('insulation_r_body'),
            'insulation_s_body' => $request->input('insulation_s_body'),
            'insulation_t_body' => $request->input('insulation_t_body'),
            ]);

             //Menyimpan data ke DataAsetJTM
             $data_aset_jtm = DataAsetJTM::where('nomor_berita_acara', $berita_acara_pengoperasian_jtm->nomor_berita_acara)->first();
             if ($data_aset_jtm) {
                $data_aset_jtm->update([
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
                    'id_cabletype' => $request->input('id_cabletype'),
                    'phase' => $request->input('phase'),
                    'spec_cablesize' => $request->input('spec_cablesize'),
                    'cable_length' => $request->input('cable_length'),
                    'spec_pole' => $request->input('spec_pole'),
                    'spec_consule' => $request->input('spec_consule'),
                    'height_pole' => $request->input('height_pole'),
                    'spec_circuit' => $request->input('spec_circuit'),
                    'segment1' => $request->input('segment1'),
                    'segment2' => $request->input('segment2'),
                    'environment' => $request->input('environment'),
                    'insulation_r_body' => $request->input('insulation_r_body'),
                    'insulation_s_body' => $request->input('insulation_s_body'),
                    'insulation_t_body' => $request->input('insulation_t_body'),
                    ]);
                
                    return redirect()->route('BeritaAcaraPengoperasianJTM')->with('success','Data Berhasil Disimpan');  
                }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita_acara_pengoperasian_jtm = BeritaAcaraPengoperasianJTM::findOrFail($id);
        $berita_acara_pengoperasian_jtm->delete();
        $data_aset_jtm = DataAsetJTM::where('nomor_berita_acara',$berita_acara_pengoperasian_jtm->nomor_berita_acara)->first();
        if ($data_aset_jtm){
            $data_aset_jtm->delete();
        }
        return redirect()->route('BeritaAcaraPengoperasianJTM')->with('success', 'Berita Acara Pengoperasian JTM Berhasil Dihapus');
    }

    public function downloadExcel($id)
    {
        $berita_acara_pengoperasian_jtm = BeritaAcaraPengoperasianJTM::find($id);

        return Excel::download(new BeritaAcaraPengoperasianJTMExport($berita_acara_pengoperasian_jtm), 'berita_acara_pengoperasian_jtm.xlsx');
    }

    public function downloadPdf($id, Request $request)
    {
        $berita_acara_pengoperasian_jtm= BeritaAcaraPengoperasianJTM::find($id);
        $berita_acara_pengoperasian_jtm->pelaksana = $request->input('pelaksana','........');
        $berita_acara_pengoperasian_jtm->pengawas = $request->input('pengawas','........');
        $berita_acara_pengoperasian_jtm->manager = $request->input('manager','........');

        $pdf = Pdf::loadView('BeritaAcaraPengoperasian_JTM.pdf',compact('berita_acara_pengoperasian_jtm'));

        return $pdf->download('berita_acara_pengoperasian_jtm.pdf');
       
    }
}
