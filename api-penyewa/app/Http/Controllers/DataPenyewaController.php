<?php

namespace App\Http\Controllers;

use App\Models\DataPenyewa;
use Illuminate\Http\Request;

class DataPenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataPenyewa::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $penyewa = new DataPenyewa();
        $penyewa->nama = $request->nama;
        $penyewa->alamat = $request->alamat;
        $penyewa->notelp = $request->notelp;
        $penyewa->save();

        return "Data Penyewa Berhasil Di tambah";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPenyewa  $dataPenyewa
     * @return \Illuminate\Http\Response
     */
    public function show(DataPenyewa $dataPenyewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPenyewa  $dataPenyewa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPenyewa $dataPenyewa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPenyewa  $dataPenyewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $notelp = $request->notelp;

        $penyewa = DataPenyewa::find($id);
        $penyewa->nama = $nama;
        $penyewa->alamat = $alamat;
        $penyewa->notelp = $notelp;
        $penyewa->save();

        return "Data Berhasil Diupdate";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPenyewa  $dataPenyewa
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $penyewa = DataPenyewa::find($id);
        $penyewa->delete();
    }
}
