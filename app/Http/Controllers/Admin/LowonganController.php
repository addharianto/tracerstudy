<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\Perusahaan;
use Str;

class LowonganController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongan = Lowongan::with(['user','perusahaan'])->get();
        return view('admin.lowongan.index',compact('lowongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perusahaan = Perusahaan::all();
        return view('admin.lowongan.create',compact('perusahaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Lowongan::create([
        //     'judul' => $request->judul,
        //     'posisi' => $request->posisi,
        //     'jumlah' => $request->jumlah,
        //     'deskripsi' => $request->deskripsi,
        //     'perusahaan_id' => $request->perusahaan_id,
        //     'tglMulai' => $request->tglMulai,
        //     'tglBerakhir' => $request->tglBerakhir,
        //     'tgl' => date('Y-m-d'),
        //     'slug' => Str::slug($request->judul),
        //     'user_id' => auth()->user()->id,
        // ]);
        $request->request->add([
            'tgl' => date('Y-m-d'),
            'slug' => Str::slug($request->judul),
            'user_id' => auth()->user()->id,
        ]);
        Lowongan::create($request->all());
        return redirect()->route('admin.lowongan.index')->with('success','Data berhasil ditambah');
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
    public function edit(Lowongan $lowongan)
    {   
        $perusahaan = Perusahaan::get();
        return view('admin.lowongan.edit',compact('lowongan','perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lowongan $lowongan)
    {
        
        $request->request->add([
            'tgl' => date('Y-m-d'),
            'slug' => Str::slug($request->judul),
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('admin.lowongan.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lowongan $lowongan)
    {    
        $lowongan->delete();
        return redirect()->route('admin.lowongan.index')->with('success','Data berhasil dihapus');
    }
    
}
