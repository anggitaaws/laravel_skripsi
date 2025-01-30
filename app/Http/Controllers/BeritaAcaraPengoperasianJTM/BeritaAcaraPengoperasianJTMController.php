<?php

namespace App\Http\Controllers\BeritaAcaraPengoperasianJTM;

use App\Http\Controllers\Controller;
use App\Models\BeritaAcaraPengoperasianJTM;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
