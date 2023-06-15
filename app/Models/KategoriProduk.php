<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    //panggil table produk
    protected $table = 'kategori_produk' ;
    protected $fillable = [
        'nama'
    ];
    //terima relasi one To Many dengan table produk
    public function produk(){
        return $this ->belongsTO(produk::class);
    }
}
