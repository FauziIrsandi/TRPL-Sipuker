<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pinjaman;

class PemerintahController extends Controller
{
  public function index(){
    return view('pemerintah/index');
  }

  public function getProfil()
  {
    $user = Auth::user();
    return view('pemerintah/profilprt', compact('user'));
  }

  public function getModalPrt()
  {
    $user = Auth::user();
    $pinjaman_modal = Pinjaman::all();
    // dd($pinjaman_modal);
    return view('pemerintah/pinjamanModalprt', compact('user', 'pinjaman_modal'));
  }

public function updateStatusPinjaman(Request $request)
{
  Pinjaman::find($request->id_pinjaman)->update(['id_status' => 2]);
return redirect('admin/pinjamanModalprt');
}
}
