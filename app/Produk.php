<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use SoftDeletes;
 
    protected $fillable = [
        'nama_produk', 'deskripsi_produk'
    ];
    protected $dates = ['deleted_at'];
}
