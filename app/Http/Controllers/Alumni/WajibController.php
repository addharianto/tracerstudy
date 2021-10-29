<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\WajibDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Wajib;
use Str;
use File;

class WajibController extends Controller
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
        $wajib = Wajib::with(['user'])->get();
        return view('alumni.wajib.index',compact('wajib'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wajib = Wajib::all();
        return view('alumni.wajib.create',compact('wajib'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Wajib::create([
            'f5_01' => $request->f5_01,
            'f5_02' => $request->f5_02,
            'f5_03' => $request->f5_03,
            'f12_01' => $request->f12_01,
            'f12_01_lainnya' => $request->f12_01,
            'f8' => $request->f8,
            'f14' => $request->f14,
            'f15' => $request->f15,
            'f13_01' => $request->f13_01,
            'f13_02' => $request->f13_02,
            'f13_03' => $request->f13_03,
            'user_id' => auth()->user()->id,
        ]);
        $request->validate([
            'f5_01' => 'required',
            'f5_02' => 'required',
            'f5_03' => 'required',
            'f8' => 'required',
            'f14' => 'required',
            'f15' => 'required',
            'f13_01' => 'required',
            'f13_02' => 'required',
            'f13_03' => 'required',
        ]);
        $messages = [
            'f5_01' => 'Wajib diisi.',
            'f5_02' => 'Wajib diisi.',
            'f5_03' => 'Wajib diisi.',
            'f8' => 'Wajib diisi.',
            'f14' => 'Wajib diisi.',
            'f15' => 'Wajib diisi.',
            'f13_01' => 'Wajib diisi.',
            'f13_02' => 'Wajib diisi.',
            'f13_03' => 'Wajib diisi.',
        ];
 

        return redirect()->route('alumni.pembelajaran.create')->with('success','Data berhasil ditambah');
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
    public function edit(Wajib $wajib)
    {   
        $wajib = Wajib::get();
        return view('alumni.wajib.edit',compact('wajib','wajib'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wajib $wajib)
    {
        $this->authorize('update',$wajib);

        Wajib::create([
            'f5_01' => $request->f2_01,
            'f5_02' => $request->f5_02,
            'f5_03' => $request->f5_03,
            'f8' => $request->f8,
            'f14' => $request->f14,
            'f15' => $request->f15,
            'f13_01' => $request->f13_01,
            'f13_02' => $request->f13_02,
            'f13_03' => $request->f13_03,
            'user_id' => auth()->user()->id,
        ]);
           
        return redirect()->route('alumni.wajib.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wajib $wajib)
    {   
        $this->authorize('delete',$wajib);

        event(new WajibDeleteEvent($wajib));
        
        $wajib->delete();
        return redirect()->route('alumni.wajib.index')->with('success','Data berhasil dihapus');
    }
    
}
