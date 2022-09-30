<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiGambarProdukController extends Controller
{
    //
    public function index(){
      $data_gambar = gambar::with('produk',)->get()->toArray();
      return $data_gambar;
    }
    
    public function showById($id){
      $data_gambar = gambar::with('produk')->where('id_gambar', $id)->get();
      return $data_gambar;
    }
    
    public function showByProduk($id){
      $data_gambar = gambar::with('produk')->where('id_produk', $id)->get();
      return $data_produk;
    }
}
