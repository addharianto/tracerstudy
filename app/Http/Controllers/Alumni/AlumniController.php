<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\AlumniDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Alumni;
use App\Models\Prodi;
use Str;
use File;

class AlumniController extends Controller
{
    private $summernoteService;
    private $uploadService;

    public function __construct(SummernoteService $summernoteService, UploadService $uploadService)
    {
        $this->summernoteService = $summernoteService;
        $this->uploadService = $uploadService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::with(['user','prodi'])->get();
        return view('alumni.alumni.index',compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('alumni.alumni.create',compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alumni::create([
            'npm' => $request->npm,
            'kode_pt' => $request->kode_pt,
            'tahun_lulus' => $request->tahun_lulus,
            'nomor_hp' => $request->nomor_hp,
            'photo' => $this->uploadService->imageUpload('alumni'),
            'user_id' => auth()->user()->id,
            'prodi_id' => $request->prodi_id,
        ]);
        $request->validate([
            'npm'      => 'required',
            'kode_pt'  => 'required',
            'nomor_hp'     => 'required|min:11|max:12',
        ]);
        $messages = [
            'npm.required'          => 'NPM wajib diisi.',
            'kode_pt.required'      => 'kode Perguruan Tinggi wajib diisi.',
            'nomor_hp.min'           => 'Nomor HP wajib diisi',
        ];

        return redirect()->route('alumni.wajib.create')->with('success','Data berhasil ditambah');
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
    public function edit(Prodi $prodi)
    {   
        $prodi = Prodi::get();
        return view('alumni.prodi.edit',compact('prodi','prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodi $prodi)
    {
        $this->authorize('update',$prodi);

        Prodi::create([
            'npm' => $request->npm,
            'kode_pt' => $request->kode_pt,
            'tahun_lulus' => $request->tahun_lulus,
            'nomor_hp' => $request->nomor_hp,
            'photo' => $this->uploadService->imageUpload('alumni'),
            'user_id' => auth()->user()->id,
            'prodi_id' => $request->prodi_id,
        ]);
           
        return redirect()->route('alumni.alumni.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {   
        $this->authorize('delete',$alumni);

        event(new AlumniDeleteEvent($alumni));
        
        $alumni->delete();
        return redirect()->route('alumni.alumni.index')->with('success','Data berhasil dihapus');
    }
    
}
