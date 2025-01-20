<?php

namespace App\Http\Controllers\DataAsetJTR;

use App\Models\DataAsetJTR;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataAsetJTRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_aset_jtr = DataAsetJTR::orderBy('created_at', 'DESC')->get();
        return view('DataAsetJTR.index',compact('data_aset_jtr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataAsetJTR.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DataAsetJTR::create($request->all());
        return redirect()->route('DataAsetJTR')->with('success','Data Aset JTR Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_aset_jtr = DataAsetJTR::findOrFail($id);
        return view('DataAsetJTR.show',compact('data_aset_jtr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_aset_jtr = DataAsetJTR::findOrFail($id);
        return view('DataAsetJTR.edit',compact('data_aset_jtr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_aset_jtr = DataAsetJTR::findOrFail($id);
        $data_aset_jtr->update($request->all());
        return redirect()->route('DataAsetJTR')->with('success','Data Aset JTR Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_aset_jtr = DataAsetJTR::findOrFail($id);
        $data_aset_jtr->delete();
        return redirect()->route('DataAsetJTR')->with('success', 'Data Aset JTR Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
    
        // Mencari DataAsetGardu berdasarkan nama atau ulp
        $data_aset_jtr = DataAsetJTR::where('ulp', 'LIKE', "%$query%")
                        ->orWhere('location', 'LIKE', "%$query%")
                        ->get();
        return view('DataAsetJTR.index', compact('data_aset_jtr'));
    }
}
