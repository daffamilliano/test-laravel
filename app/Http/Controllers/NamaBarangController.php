<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use App\Models\NamaBarang;

use Illuminate\Http\Request;

class NamaBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('jenisbarang.index', compact('jenisbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisbarang = JenisBarang::all();
        return view('jenisbarang.nama', compact('jenisbarang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jenis_barang_id' => 'required',
        ]);

        $namabarang = new NamaBarang;
        $namabarang->nama_barang = $request -> nama_barang;
        $namabarang->jenis_barang_id = $request->jenis_barang_id;
        $namabarang->save();
        return redirect()->route('jenisbarang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(NamaBarang $namabarang)
    {
        return view('jenisbarang.shownama',compact('namabarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $namabarang = NamaBarang::findOrFail($id);
        $jenisbarang = JenisBarang::all();
        return view('jenisbarang.editnama', compact('namabarang', 'jenisbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
        ]);

        $namabarang = NamaBarang::findOrFail($id);
        $namabarang->nama_barang = $request->nama_barang;
        $namabarang->jenis_barang_id = $request->jenis_barang_id;
        $namabarang->save();
        return redirect()->route('jenisbarang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
