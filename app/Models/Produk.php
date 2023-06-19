<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesanan;
use App\Models\Kategori;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['kode','name','harga','stok','min_stok','deskripsi_produk',];

    public function KategoriID(){
        return $this->hasOne(Kategori::class);
    }

    public function RelasiPesanan(){
    return $this->belongsTo(Pesanan::class);
    }
}
