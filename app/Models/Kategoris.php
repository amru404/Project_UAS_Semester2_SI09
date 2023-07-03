<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class Kategoris extends Model
{
    use HasFactory;

    protected $fillable = ['name','created_at','updated_at'];

    public function RelasiProduk(){
    return $this->belongsTo(Produk::class);
    }
}