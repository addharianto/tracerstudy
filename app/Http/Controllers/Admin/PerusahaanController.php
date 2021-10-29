<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\PerusahaanDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Perusahaan;
use App\Models\KategoriPerusahaan;
use Str;
use File;

class PerusahaanController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan = Perusahaan::with(['user','kategoriPerusahaan'])->get();
        return view('admin.perusahaan.index',compact('perusahaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriPerusahaan = KategoriPerusahaan::all();
        return view('admin.perusahaan.create',compact('kategoriPerusahaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Perusahaan::create([
            'nama' => $request->nama,
            // 'alamat' => $this->summernoteService->imageUpload('perusahaan'),
            // 'deskripsi' => $this->summernoteService->imageUpload('perusahaan'),
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            // 'slug' => Str::slug($request->nama),
            'user_id' => auth()->user()->id,
            'kategori_perusahaan_id' => $request->kategori_perusahaan_id,
        ]);

        return redirect()->route('admin.perusahaan.index')->with('success','Data berhasil ditambah');
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
    public function edit(Perusahaan $perusahaan)
    {   
        $kategoriPerusahaan = KategoriPerusahaan::get();
        return view('admin.perusahaan.edit',compact('perusahaan','kategoriPerusahaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        // $this->authorize('update',$perusahaan);

        // Perusahaan::create([
        //     'nama' => $request->nama,
        //     'alamat' => $this->summernoteService->imageUpload('perusahaan'),
        //     'deskripsi' => $this->summernoteService->imageUpload('perusahaan'),
        //     // 'slug' => Str::slug($request->nama),
        //     'user_id' => auth()->user()->id,
        //     'kategori_perusahaan_id' => $request->kategori_perusahaan_id,
        // ]);
        $perusahaan->update($request->all());
        return redirect()->route('admin.perusahaan.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perusahaan $perusahaan)
    {    
        $perusahaan->delete();
        return redirect()->route('admin.perusahaan.index')->with('success','Data berhasil dihapus');
    }
    // public function destroy(Perusahaan $perusahaan)
    // {   
    //     $this->authorize('delete',$perusahaan);

    //     event(new PerusahaanDeleteEvent($perusahaan));
        
    //     $perusahaan->delete();
    //     return redirect()->route('admin.perusahaan.index')->with('success','Data berhasil dihapus');
    // }
}
