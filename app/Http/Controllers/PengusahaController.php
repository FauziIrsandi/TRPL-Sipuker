<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pinjaman;

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

  public function getModal()
  {
    $user = Auth::user();
    return view('pengusaha/pinjamanModal', compact('user'));
  }

  public function pinjam(Request $request)
  {
    $pinjaman=new Pinjaman();
    $pinjaman->besar_pinjaman=$request->besar_pinjaman;
    $pinjaman->nama_peminjam=$request->nama_peminjam;
    $pinjaman->jenis_pinjaman=$request->jenis_pinjaman;
    $pinjaman->metode_pelunasan=$request->metode_pelunasan;

  $pinjaman->id_status=1;
  $pinjaman->tanggal_pinjam= date("Y-m-d");

  $pinjaman->save();
return redirect('pengusaha/pinjamanModal');
  }
}
