<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambar_produk extends Model
{
    use HasFactory;
    protected $table = 'gambar_produk';
    protected $primaryKey = 'id_gambar';
    protected $fillable = ['link_gambar_produk', 'id_produk'];
}
