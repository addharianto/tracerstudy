<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.home', compact('user'));
    }

   function profile(){
    $user = Auth::user();
       return view('user.profile');
   }
   function settings(){
    $user = Auth::user();
       return view('user.settings');
   }
}
