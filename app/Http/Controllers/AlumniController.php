<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumniRequest as Request;

use App\Models\Alumni;

class AlumniController extends Controller
{
    public function index()
    {
    	$alumni = Alumni::with(['user','kategoriAlumni'])->latest()->paginate(4);
    	return view('alumni.index',compact('alumni'));
    }

    public function show(Alumni $alumni)
    {
    	return view('alumni.show',compact('alumni'));
    }

    public function search(Request $request)
    {	
    	$alumni = Alumni::with(['user','kategoriAlumni'])->where(function($query) use ($request){
    		$query->where('judul','like','%'.$request->keyword.'%')
            ->orWhere('deskripsi','like','%'.$request->keyword.'%');
    	})->paginate(4);

    	return view('alumni.index',compact('alumni'));
    }
}