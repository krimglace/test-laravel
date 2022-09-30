<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\variasi;
use App\Models\produk;
use App\Models\gambar_produk;

class produkController extends Controller
{
    //index
    public function index(){
      $data_produk = produk::simplePaginate(10);
      $data_kategori = kategori::all();
      $data_variasi = variasi::all();
      return view('Produk.Index', compact('data_produk', 'data_kategori', 'data_variasi'));
    }
    
    public function store(Request $request){
      $request->validate([
        'nama_produk' => 'required',
        'harga_produk' => 'required',
        'jumlah_produk' => 'required'
      ]);
      produk::create($request->all());
      return redirect()->route('produk.index')->with('success', 'Data Berhasil Ditambahkan');
    }
    
    public function show(produk $produk){
      $data_kategori = kategori::all();
      $data_variasi = variasi::all();
      $data_gambar = gambar_produk::all();
      
      return view('produk.Show', compact('produk', 'data_kategori', 'data_gambar', 'data_variasi'));
    }
    
    public function edit(produk $produk){
      $data_kategori = kategori::all();
      $data_variasi = variasi::all();
      
      return view('produk.edit', compact('produk', 'data_kategori', 'data_variasi'));
    }
    
    public function update(Request $request, produk $produk){
      $request->validate([
        'nama_produk' => 'required',
        'harga_produk' => 'required',
        'jumlah_produk' => 'required'
      ]);
      $produk->update($request->all());
      return redirect()->route('produk.index')->with('success','Data berhasildiupdate');
    }
    
    public function destroy(produk $produk){
        $produk->delete();
        return redirect()->route('produk.index')->with('success','data Berhasil Dihapus');
    }
}
