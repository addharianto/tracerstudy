<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\KompetensiDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Kompetensi;
use Str;
use File;

class KompetensiController extends Controller
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
        $kompetensi = Kompetensi::with(['user'])->get();
        return view('alumni.kompetensi.index',compact('kompetensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kompetensi = Kompetensi::all();
        return view('alumni.kompetensi.create',compact('kompetensi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kompetensi::create([
            'f17a_1' => $request->f17a_1,
            'f17a_3' => $request->f17a_3,
            'f17a_5' => $request->f17a_5,
            'f17a_5a' => $request->f17a_5a,
            'f17a_7' => $request->f17a_7,
            'f17a_9' => $request->f17a_9,
            'f17a_11' => $request->f17a_11,
            'f17a_13' => $request->f17a_13,
            'f17a_15' => $request->f17a_15,
            'f17a_17' => $request->f17a_17,
            'f17a_19' => $request->f17a_19,
            'f17a_21' => $request->f17a_21,
            'f17a_23' => $request->f17a_23,
            'f17a_25' => $request->f17a_25,
            'f17a_27' => $request->f17a_27,
            'f17a_29' => $request->f17a_29,
            'f17a_31' => $request->f17a_31,
            'f17a_33' => $request->f17a_33,
            'f17a_35' => $request->f17a_35,
// bagian b
            'f17b_2b' => $request->f17b_2b,
            'f17b_4b' => $request->f17b_4b,
            'f17b_6b' => $request->f17b_6b,
            'f17b_6ba' => $request->f17b_6ba,
            'f17b_8b' => $request->f17b_8b,
            'f17b_10b' => $request->f17b_10b,
            'f17b_12b' => $request->f17b_12b,
            'f17b_14b' => $request->f17b_14b,
            'f17b_16b' => $request->f17b_16b,
            'f17b_18b' => $request->f17b_18b,
            'f17b_20b' => $request->f17b_20b,
            'f17b_22b' => $request->f17b_22b,
            'f17b_24b' => $request->f17b_24b,
            'f17b_26b' => $request->f17b_26b,
            'f17b_28b' => $request->f17b_28b,
            'f17b_30b' => $request->f17b_30b,
            'f17b_32b' => $request->f17b_32b,
            'f17b_34b' => $request->f17b_34b,
            'f17b_36b' => $request->f17b_36b,
            'user_id' => auth()->user()->id,
        ]);
        $request->validate([
            'f17a_1' => 'required',
            'f17a_3' => 'required',
            'f17a_5' => 'required',
            'f17a_5a' => 'required',
            'f17a_7' => 'required',
            'f17a_9' => 'required',
            'f17a_11' => 'required',
            'f17a_13' => 'required',
            'f17a_15' => 'required',
            'f17a_17' => 'required',
            'f17a_19' => 'required',
            'f17a_21' => 'required',
            'f17a_23' => 'required',
            'f17a_25' => 'required',
            'f17a_27' => 'required',
            'f17a_29' => 'required',
            'f17a_31' => 'required',
            'f17a_33' => 'required',
            'f17a_35' => 'required',
// bagian b
            'f17b_2b' => 'required',
            'f17b_4b' => 'required',
            'f17b_6b' => 'required',
            'f17b_6ba' => 'required',
            'f17b_8b' => 'required',
            'f17b_10b' => 'required',
            'f17b_12b' => 'required',
            'f17b_14b' => 'required',
            'f17b_16b' => 'required',
            'f17b_18b' => 'required',
            'f17b_20b' => 'required',
            'f17b_22b' => 'required',
            'f17b_24b' => 'required',
            'f17b_26b' => 'required',
            'f17b_28b' => 'required',
            'f17b_30b' => 'required',
            'f17b_32b' => 'required',
            'f17b_34b' => 'required',
            'f17b_36b' => 'required',
        ]);
        $messages = [
           
        ];
 

        return redirect()->route('alumni.alumni.index')->with('success','Data berhasil ditambah');
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
    public function edit(Kompetensi $kompetensi)
    {   
        $kompetensi = Kompetensi::get();
        return view('alumni.kompetensi.edit',compact('kompetensi','kompetensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kompetensi $kompetensi)
    {
        $this->authorize('update',$kompetensi);

        Kompetensi::create([
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
           
        return redirect()->route('alumni.kompetensi.create')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kompetensi $kompetensi)
    {   
        $this->authorize('delete',$kompetensi);

        event(new KompetensiDeleteEvent($kompetensi));
        
        $kompetensi->delete();
        return redirect()->route('alumni.kompetensi.index')->with('success','Data berhasil dihapus');
    }
    
}
