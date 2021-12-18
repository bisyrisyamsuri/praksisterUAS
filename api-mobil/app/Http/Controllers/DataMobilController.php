<?php

namespace App\Http\Controllers;

use App\Models\DataMobil;
use Illuminate\Http\Request;

class DataMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataMobil::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $mobil = new DataMobil();
        $mobil->type = $request->type;
        $mobil->plat = $request->plat;
        $mobil->kapasitas = $request->kapasitas;
        $mobil->harga = $request->harga;
        $mobil->save();

        return "Data Mobil Berhasil Di tambah";
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
     * @param  \App\Models\DataMobil  $dataMobil
     * @return \Illuminate\Http\Response
     */
    public function show(DataMobil $dataMobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataMobil  $dataMobil
     * @return \Illuminate\Http\Response
     */
    public function edit(DataMobil $dataMobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataMobil  $dataMobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $type = $request->type;
        $plat = $request->plat;
        $kapasitas = $request->kapasitas;
        $harga = $request->harga;

        $mobil = DataMobil::find($id);
        $mobil->type = $type;
        $mobil->plat = $plat;
        $mobil->kapasitas = $kapasitas;
        $mobil->harga = $harga;
        $mobil->save();

        return "Data Berhasil Diupdate";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataMobil  $dataMobil
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $mobil = DataMobil::find($id);
        $mobil->delete();
    }
}
