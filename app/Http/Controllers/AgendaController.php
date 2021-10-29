<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
    	$agenda = Agenda::with(['user'])->latest()->paginate(4);
    	return view('agenda.index',compact('agenda'));
    }

    public function show(Agenda $agenda)
    {
    	return view('agenda.show',compact('agenda'));
    }
}
