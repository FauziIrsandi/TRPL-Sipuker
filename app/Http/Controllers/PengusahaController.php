<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PengusahaController extends Controller
{
  public function index(){
    return view('pengusaha/beranda');
  }

  public function getProfil()
  {
    $user = Auth::user();
    return view('pengusaha/profil', compact('user'));
  }
}
