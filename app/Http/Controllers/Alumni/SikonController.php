<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\SikonDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Sikon;
use Str;
use File;

class SikonController extends Controller
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
        $sikon = Sikon::with(['user'])->get();
        return view('alumni.sikon.index',compact('sikon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sikon = Sikon::all();
        return view('alumni.sikon.create',compact('sikon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sikon::create([
            'f9_01' => $request->f9_01,
            'f9_02' => $request->f9_02,
            'f9_03' => $request->f9_03,
            'f9_04' => $request->f9_04,
            'f9_05' => $request->f9_05,
            'f9_06' => $request->f9_06,
            'f10_01' => $request->f10_01,
            'f10_01_lainnya' => $request->f10_01_lainnya,
            'f11_01' => $request->f11_01,
            'f11_01_lainnya' => $request->f11_01_lainnya,
            'f16_01' => $request->f16_01,
            'f16_02' => $request->f16_02,
            'f16_03' => $request->f16_03,
            'f16_04' => $request->f16_04,
            'f16_05' => $request->f16_05,
            'f16_06' => $request->f16_06,
            'f16_07' => $request->f16_07,
            'f16_08' => $request->f16_08,
            'f16_09' => $request->f16_09,
            'f16_10' => $request->f16_10,
            'f16_11' => $request->f16_11,
            'f16_12' => $request->f16_12,
            'f16_13' => $request->f16_13,
            'f16_14' => $request->f16_14,            
            'user_id' => auth()->user()->id,
        ]);
        $request->validate([
            'f9_01' => 'required',
            // 'f9_02' => 'required',
            // 'f9_03' => 'required',
            // 'f9_04' => 'required',
            // 'f9_05' => 'required',
            // 'f9_06' => 'required',
            // 'f10_01' => 'required',
            // 'f11_01' => 'required',
            // 'f16_01' => 'required',
            // 'f16_02' => 'required',
            // 'f16_03' => 'required',
            // 'f16_04' => 'required',
            // 'f16_05' => 'required',
            // 'f16_06' => 'required',
            // 'f16_07' => 'required',
            // 'f16_08' => 'required',
            // 'f16_09' => 'required',
            // 'f16_10' => 'required',
            // 'f16_11' => 'required',
            // 'f16_12' => 'required',
            // 'f16_13' => 'required',
            // 'f16_14' => 'required',
        ]);
        $messages = [
            'f9_01' => 'wajib diisi',
            
        ];
 

        return redirect()->route('alumni.kompetensi.create')->with('success','Data berhasil ditambah');
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
    public function edit(Sikon $sikon)
    {   
        $sikon = Sikon::get();
        return view('alumni.sikon.edit',compact('sikon','sikon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sikon $sikon)
    {
        $this->authorize('update',$sikon);

        Sikon::create([
            'f9_01' => $request->f9_01,
            'f9_02' => $request->f9_02,
            'f9_03' => $request->f9_03,
            'f9_04' => $request->f9_04,
            'f9_05' => $request->f9_05,
            'f9_06' => $request->f9_06,
            'f10_01' => $request->f10_01,
            'f10_01_lainnya' => $request->f10_01_lainnya,
            'f11_01' => $request->f11_01,
            'f11_01_lainnya' => $request->f11_01_lainnya,
            'f16_01' => $request->f16_01,
            'f16_02' => $request->f16_02,
            'f16_03' => $request->f16_03,
            'f16_04' => $request->f16_04,
            'f16_05' => $request->f16_05,
            'f16_06' => $request->f16_06,
            'f16_07' => $request->f16_07,
            'f16_08' => $request->f16_08,
            'f16_09' => $request->f16_09,
            'f16_10' => $request->f16_10,            
            'f16_11' => $request->f16_11,            
            'f16_12' => $request->f16_12,
            'f16_13' => $request->f16_13,
            'f16_14' => $request->f16_14,            
            'user_id' => auth()->user()->id,
        ]);
           
        return redirect()->route('alumni.sikon.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sikon $sikon)
    {   
        $this->authorize('delete',$sikon);

        event(new SikonDeleteEvent($sikon));
        
        $sikon->delete();
        return redirect()->route('alumni.sikon.index')->with('success','Data berhasil dihapus');
    }
    
}
