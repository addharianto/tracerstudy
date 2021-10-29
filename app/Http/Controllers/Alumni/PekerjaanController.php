<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\PekerjaanDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Pekerjaan;
use Str;
use File;

class PekerjaanController extends Controller
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
        $pekerjaan = Pekerjaan::with(['user'])->get();
        return view('alumni.pekerjaan.index',compact('pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pekerjaan = Pekerjaan::all();
        return view('alumni.pekerjaan.create',compact('pekerjaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pekerjaan::create([
            'f3_01' => $request->f3_01,
            'f3_02' => $request->f3_02,
            'f3_03' => $request->f3_03,
            'f4_01' => $request->f4_01,
            'f4_02' => $request->f4_02,
            'f4_03' => $request->f4_03,
            'f4_04' => $request->f4_04,
            'f4_05' => $request->f4_05,
            'f4_06' => $request->f4_06,
            'f4_07' => $request->f4_07,
            'f4_08' => $request->f4_08,
            'f4_09' => $request->f4_09,
            'f4_10' => $request->f4_10,
            'f4_11' => $request->f4_11,
            'f4_12' => $request->f4_12,
            'f4_13' => $request->f4_13,
            'f4_14' => $request->f4_14,
            'f4_15' => $request->f4_15,
            'f4_16' => $request->f4_16,
            'f6' => $request->f6,
            'f7' => $request->f7,
            'f8' => $request->f8,
            'user_id' => auth()->user()->id,
        ]);
        $request->validate([
            'f3_01' => 'required',
            'f3_02' => 'required',
            'f3_03' => 'required',
            'f4_01' => 'required',
            'f4_02' => 'required',
            'f4_03' => 'required',
            'f4_04' => 'required',
            'f4_05' => 'required',
            'f4_06' => 'required',
            'f4_07' => 'required',
            'f4_08' => 'required',
            'f4_09' => 'required',
            'f4_10' => 'required',
            'f4_11' => 'required',
            'f4_12' => 'required',
            'f4_13' => 'required',
            'f4_14' => 'required',
            'f4_15' => 'required',
            'f4_16' => 'required',
            'f6' => 'required',
            'f7' => 'required',
            'f8' => 'required',
        ]);
        $messages = [
            'f3_01' => 'wajib diisi.',
            'f3_02' => 'wajib diisi.',
            'f3_03' => 'wajib diisi.',
            'f4_01' => 'wajib diisi.',
            'f4_02' => 'wajib diisi.',
            'f4_03' => 'wajib diisi.',
            'f4_04' => 'wajib diisi.',
            'f4_05' => 'wajib diisi.',
            'f4_06' => 'wajib diisi.',
            'f4_07' => 'wajib diisi.',
            'f4_08' => 'wajib diisi.',
            'f4_09' => 'wajib diisi.',
            'f4_10' => 'wajib diisi.',
            'f4_11' => 'wajib diisi.',
            'f4_12' => 'wajib diisi.',
            'f4_13' => 'wajib diisi.',
            'f4_14' => 'wajib diisi.',
            'f4_15' => 'wajib diisi.',
            'f4_16' => 'wajib diisi.',
            'f6' => 'wajib diisi.',
            'f7' => 'wajib diisi.',
            'f8' => 'wajib diisi.',
        ];
 

        return redirect()->route('alumni.sikon.create')->with('success','Data berhasil ditambah');
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
    public function edit(Pekerjaan $pekerjaan)
    {   
        $pekerjaan = Pekerjaan::get();
        return view('alumni.pekerjaan.edit',compact('pekerjaan','pekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pekerjaan $pekerjaan)
    {
        $this->authorize('update',$pekerjaan);

        Pekerjaan::create([
            'f3_01' => $request->f3_01,
            'f3_02' => $request->f3_02,
            'f3_03' => $request->f3_03,
            'f4_01' => $request->f4_01,
            'f4_02' => $request->f4_02,
            'f4_03' => $request->f4_03,
            'f4_04' => $request->f4_04,
            'f4_05' => $request->f4_05,
            'f4_06' => $request->f4_06,
            'f4_07' => $request->f4_07,
            'f4_08' => $request->f4_08,
            'f4_09' => $request->f4_09,
            'f4_10' => $request->f4_10,
            'f4_11' => $request->f4_11,
            'f4_12' => $request->f4_12,
            'f4_13' => $request->f4_13,
            'f4_14' => $request->f4_14,
            'f4_15' => $request->f4_15,
            'f4_16' => $request->f4_16,
            'f6' => $request->f6,
            'f7' => $request->f7,
            'f8' => $request->f8,
            'user_id' => auth()->user()->id,
        ]);
           
        return redirect()->route('alumni.pekerjaan.create')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pekerjaan $pekerjaan)
    {   
        $this->authorize('delete',$pekerjaan);

        event(new PekerjaanDeleteEvent($pekerjaan));
        
        $pekerjaan->delete();
        return redirect()->route('alumni.pekerjaan.index')->with('success','Data berhasil dihapus');
    }
    
}
