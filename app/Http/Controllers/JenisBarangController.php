<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBarang;
use App\Models\NamaBarang;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $namabarang = NamaBarang::with('jenisbarang')->get();
        $jenisbarang = JenisBarang::latest()->paginate(5);
      
        return view('jenisbarang.index',compact('jenisbarang','namabarang'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenisbarang.create');
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
            'jenis_barang' => 'required',
            'deskripsi' => 'required',
        ]);

        JenisBarang::create($request->all());
        return redirect()->route('jenisbarang.index')
                        ->with('success', 'Jenis Barang created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JenisBarang $jenisbarang)
    {
        return view('jenisbarang.show',compact('jenisbarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisBarang $jenisbarang)
    {
        return view('jenisbarang.edit',compact('jenisbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisBarang $jenisbarang)
    {
        $request->validate([
            'jenis_barang' => 'required',
            'deskripsi' => 'required',
        ]);

        $jenisbarang->update($request->all());
        return redirect()->route('jenisbarang.index')
                        ->with('success', 'Jenis Barang updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisBarang $jenisbarang)
    {
        $jenisbarang->delete();

        return redirect()->route('jenisbarang.index')
                        ->with('success', 'Jenis Barang deleted successfully');
    }
}
