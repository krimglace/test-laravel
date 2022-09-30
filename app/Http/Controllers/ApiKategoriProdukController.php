<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class ApiKategoriProdukController extends Controller
{
    //
    public function index(){
      $data_kategori = kategori::all()->toArray();
      return $data_kategori;
    }
}
