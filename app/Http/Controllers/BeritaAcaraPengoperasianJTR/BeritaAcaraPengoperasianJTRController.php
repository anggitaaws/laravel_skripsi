<?php

namespace App\Http\Controllers\BeritaAcaraPengoperasianJTR;

use App\Http\Controllers\Controller;
use App\Models\BeritaAcaraPengoperasianJTR;
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
