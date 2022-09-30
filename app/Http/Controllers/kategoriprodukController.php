<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class kategoriprodukController extends Controller
{
    //index
    public function index(){
      $data_kategori = kategori::simplePaginate(10);
      return view('Kategori.Index', compact('data_kategori'));
    }
    
    public function store(Request $request){
      $request->validate([
        'nama_kategori' => 'required'
      ]);
      kategori::create($request->all());
      return redirect()->route('kategori.index')->with('success', 'Data Berhasil Ditambahkan');
    }
    
    public function edit(Kategori $kategori){
      return view('kategori.edit', compact('kategori'));
    }
    
    public function update(Request $request, Kategori $kategori){
      $request->validate([
        'nama_kategori' => 'required'
      ]);
      $kategori->update($request->all());
      return redirect()->route('kategori.index')->with('success','Data berhasildiupdate');
    }
    
    public function destroy(kategori $kategori){
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success','data Berhasil Dihapus');
    }
}
