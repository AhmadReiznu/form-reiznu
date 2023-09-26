<?php

namespace App\Http\Controllers;

use App\Models\PersetujuanAsesmen;
use Illuminate\Http\Request;

class PersetujuanAsesmenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asesmens = PersetujuanAsesmen::all();
        return view('asesmens.index', compact('asesmens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asesmens.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'skema' => 'required',
            'judul' => 'required',
            'nomor' => 'required',
            'tuk' => 'required',
            'nama_asesor' => 'required',
            'nama_asesi' => 'required',
            'bukti' => 'required',
            'jenis_bukti' => 'required',
            'tgl_asesmen' => 'required|date',
            'waktu_asesmen' => 'required',
            'tuk_asesmen' => 'required',
            'asesi_1' => 'required',
            'asesor' => 'required',
            'asesi_2' => 'required',
            'ttd_asesor' => 'required|image|mimes:jpeg,png,jpg,gif',
            'ttd_asesi' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);

        // Upload tanda tangan asesor
        $ttdAsesorPath = $request->file('ttd_asesor')->store('tanda_tangan');

        // Upload tanda tangan asesi
        $ttdAsesiPath = $request->file('ttd_asesi')->store('tanda_tangan');

        // Simpan data asesmen jika validasi berhasil
        PersetujuanAsesmen::create(array_merge($request->all(), [
            'ttd_asesor' => $ttdAsesorPath,
            'ttd_asesi' => $ttdAsesiPath,
        ]));

        return redirect()->route('asesmens.index')->with('success', 'Data asesmen berhasil disimpan.');

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
