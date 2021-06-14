<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKeluarga;
use Illuminate\Http\Request;

class AnggotaKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotaKeluargas = AnggotaKeluarga::paginate(10);
        return view('anggotakeluarga.index',[
            'anggotaKeluargas' => $anggotaKeluargas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggotakeluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required|unique:anggota_keluargas',
            'nama' => 'required',
            'hub_keluarga' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
        ]);


        $data = AnggotaKeluarga::create([
            'id_keluarga' => null,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'hub_keluarga' => $request->hub_keluarga,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => 1
        ]);
        return redirect()->route('rumahtangga.index')->with('success', 'Data Anggota Keluarga Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnggotaKeluarga  $anggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(AnggotaKeluarga $anggotaKeluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnggotaKeluarga  $anggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(AnggotaKeluarga $anggotaKeluarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnggotaKeluarga  $anggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnggotaKeluarga $anggotaKeluarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnggotaKeluarga  $anggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnggotaKeluarga $anggotaKeluarga)
    {
        //
    }
}
