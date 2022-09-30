<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiVariasiProdukController extends Controller
{
    //
    public function index(){
      $data_variasi = variasi::all()->toArray();
      return $data_variasi;
    }
}
