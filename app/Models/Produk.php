<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesanan;
use App\Models\Kategori;

class Produk extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['kode','nama','harga','stok','min_stok','deskripsi_produk','kategori_id',];

    public function KategoriID(){
        return $this->hasOne(Kategori::class);
    }

    public function UserID(){
        return $this->hasOne(User::class);
    }
    public function RelasiPesanan(){
    return $this->belongsTo(Pesanan::class);
    }
}
