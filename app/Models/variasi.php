<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class variasi extends Model
{
    use HasFactory;
    protected $table = 'variasi';
    protected $primaryKey = 'id_variasi';
    protected $fillable = ['nama_variasi'];
}
