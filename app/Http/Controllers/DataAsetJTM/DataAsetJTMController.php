<?php

namespace App\Http\Controllers\DataAsetJTM;

use App\Models\DataAsetJTM;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataAsetJTMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_aset_jtm = DataAsetJTM::orderBy('created_at', 'ASC')->get();
        return view('DataAsetJTM.index',compact('data_aset_jtm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataAsetJTM.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DataAsetJTM::create($request->all());
        return redirect()->route('DataAsetJTM')->with('success','Data Aset JTM Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_aset_jtm = DataAsetJTM::findOrFail($id);
        return view('DataAsetJTM.show',compact('data_aset_jtm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_aset_jtm = DataAsetJTM::findOrFail($id);
        return view('DataAsetJTM.edit',compact('data_aset_jtm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_aset_jtm = DataAsetJTM::findOrFail($id);
        $data_aset_jtm->update($request->all());
        return redirect()->route('DataAsetJTM')->with('success','Data Aset JTM Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_aset_jtm = DataAsetJTM::findOrFail($id);
        $data_aset_jtm->delete();
        return redirect()->route('DataAsetJTM')->with('success', 'Data Aset JTM Berhasil Dihapus');
    }
}
