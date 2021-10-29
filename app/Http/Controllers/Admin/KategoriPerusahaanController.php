<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\KategoriPerusahaan;
use Str;

class KategoriPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriPerusahaan = KategoriPerusahaan::all();
        return view('admin.kategori-perusahaan.index',compact('kategoriPerusahaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori-perusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KategoriPerusahaan::create([
            'nama_kategori_perusahaan' => $request->nama_kategori_perusahaan,
            'slug' => Str::slug($request->nama_kategori_perusahaan),
        ]);
        return redirect()->route('admin.kategori-perusahaan.index')->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriPerusahaan $kategoriPerusahaan)
    {
        return view('admin.kategori-perusahaan.edit',compact('kategoriPerusahaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriPerusahaan $kategoriPerusahaan)
    {
        $kategoriPerusahaan->update($request->all());
        return redirect()->route('admin.kategori-perusahaan.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriPerusahaan $kategoriPerusahaan)
    {   
        $kategoriPerusahaan->delete();
        return redirect()->route('admin.kategori-perusahaan.index')->with('success','Data berhasil dihapus');
    }
}
