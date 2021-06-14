<?php

namespace App\Http\Controllers;

use App\Models\RumahTangga;
use Illuminate\Http\Request;

class RumahTanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rumahTanggas = RumahTangga::paginate(10);

        return view('rumahtangga.index',[
            'rumahTanggas' => $rumahTanggas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rumahtangga.create');
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
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'alamat' => 'required',
        ]);


        $data = RumahTangga::create([
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'alamat' => $request->alamat,
            'nm_kepala_rt' => 1
        ]);

        return redirect()->route('rumahtangga.index')->with('success', 'Data Rumah Tangga Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RumahTangga  $rumahTangga
     * @return \Illuminate\Http\Response
     */
    public function show(RumahTangga $rumahTangga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RumahTangga  $rumahTangga
     * @return \Illuminate\Http\Response
     */
    public function edit(RumahTangga $rumahTangga)
    {
        // print_r($rumahTangga);exit;
        return view('rumahtangga.edit',[
            'rumahtangga' => $rumahTangga]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RumahTangga  $rumahTangga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RumahTangga $rumahTangga)
    {
        $rumahTangga->update([
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'alamat' => $request->alamat,
            // 'nm_kepala_rt' => 1
        ]);

        return redirect()->route('rumahtangga.index')->with('success', 'Data Rumah Tangga Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RumahTangga  $rumahTangga
     * @return \Illuminate\Http\Response
     */
    public function destroy(RumahTangga $rumahTangga)
    {
        $rumahTangga->delete();
        return back()->with('danger', 'rumah tangga telah dihapus ');

        //
    }
}
