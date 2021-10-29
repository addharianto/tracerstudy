<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\PembelajaranDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Pembelajaran;
use Str;
use File;

class PembelajaranController extends Controller
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
        $pembelajaran = Pembelajaran::with(['user'])->get();
        return view('alumni.pembelajaran.index',compact('pembelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembelajaran = Pembelajaran::all();
        return view('alumni.pembelajaran.create',compact('pembelajaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pembelajaran::create([
            'f2_01' => $request->f2_01,
            'f2_02' => $request->f2_02,
            'f2_03' => $request->f2_03,
            'f2_04' => $request->f2_04,
            'f2_05' => $request->f2_05,
            'f2_06' => $request->f2_06,
            'f2_07' => $request->f2_07,
            'user_id' => auth()->user()->id,
        ]);
        $request->validate([
            'f2_01' => 'required',
            'f2_02' => 'required',
            'f2_03' => 'required',
            'f2_04' => 'required',
            'f2_05' => 'required',
            'f2_06' => 'required',
            'f2_07' => 'required',
        ]);
        $messages = [
            'f2_01' => 'wajib diisi.',
            'f2_02' => 'wajib diisi.',
            'f2_03' => 'wajib diisi.',
            'f2_04' => 'wajib diisi.',
            'f2_05' => 'wajib diisi.',
            'f2_06' => 'wajib diisi.',
            'f2_07' => 'wajib diisi.',
        ];
 

        return redirect()->route('alumni.pekerjaan.create')->with('success','Data berhasil ditambah');
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
    public function edit(Pembelajaran $pembelajaran)
    {   
        $pembelajaran = Pembelajaran::get();
        return view('alumni.pembelajaran.edit',compact('pembelajaran','pembelajaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelajaran $pembelajaran)
    {
        $this->authorize('update',$pembelajaran);

        Pembelajaran::create([
            'f2_01' => $request->f2_01,
            'f2_02' => $request->f2_02,
            'f2_03' => $request->f2_03,
            'f2_04' => $request->f2_04,
            'f2_05' => $request->f2_05,
            'f2_06' => $request->f2_06,
            'f2_07' => $request->f2_07,
            'user_id' => auth()->user()->id,
        ]);
           
        return redirect()->route('alumni.pembelajaran.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelajaran $pembelajaran)
    {   
        $this->authorize('delete',$pembelajaran);

        event(new PembelajaranDeleteEvent($pembelajaran));
        
        $pembelajaran->delete();
        return redirect()->route('alumni.pembelajaran.index')->with('success','Data berhasil dihapus');
    }
    
}
