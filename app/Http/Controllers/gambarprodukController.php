<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\gambar_produk;


class gambarprodukController extends Controller
{
    //
    public function store(Request $request){
      $request->validate([
        'link_gambar_produk' => 'required|file|image|mimes:jpeg,png,jpg|max:10000',
        'id_produk' => 'required'
      ]);
      $idproduk = $request->input('id_produk');
      $file = $request->file('link_gambar_produk');
      $nama_file = time().'.'.$file->getClientOriginalName();
      $tujuan_upload = 'assets/images';
      $file->move($tujuan_upload,$nama_file);
 
      gambar_produk::create([
        'link_gambar_produk' => $nama_file,
        'id_produk' => $idproduk
        ]);
      return redirect()->route('produk.index')->with('success', 'Gambar Berhasil Ditambahkan');
    }
    
    public function destroy(gambar $gambar){
        $gambar->delete();
        return redirect()->route('produk.index')->with('success','data Berhasil Dihapus');
    }
}
