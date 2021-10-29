<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lowongan;

class LowonganController extends Controller
{
    public function index()
    {
    	$lowongan = Lowongan::with(['user'])->latest()->paginate(4);
    	return view('lowongan.index',compact('lowongan'));
    }

    public function show(Lowongan $lowongan)
    {
    	return view('lowongan.show',compact('lowongan'));
    }
}
