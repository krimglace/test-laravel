<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\variasi;

class variasiprodukController extends Controller
{
    public function index(){
      $data_variasi = variasi::simplePaginate(10);
      return view('variasi.Index', compact('data_variasi'));
    }
    
    public function store(Request $request){
      $request->validate([
        'nama_variasi' => 'required'
      ]);
      variasi::create($request->all());
      return redirect()->route('variasi.index')->with('success', 'Data Berhasil Ditambahkan');
    }
    
    public function edit(variasi $variasi){
      return view('variasi.edit', compact('variasi'));
    }
    
    public function update(Request $request, variasi $variasi){
      $request->validate([
        'nama_variasi' => 'required'
      ]);
      $variasi->update($request->all());
      return redirect()->route('variasi.index')->with('success','Data berhasildiupdate');
    }
    
    public function destroy(variasi $variasi){
        $variasi->delete();
        return redirect()->route('variasi.index')->with('success','data Berhasil Dihapus');
    }
}
