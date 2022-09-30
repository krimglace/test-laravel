<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class ApiProdukController extends Controller
{
    //
    public function index(){
      $data_produk = produk::all()->toArray();
      return $data_produk;
    }
    
}
