<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;
use App\Models\User;

class Pesanan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['kode','qty','wktu_pesan','status','produk_id','user_id',];

    public function ProdukID(){
        return $this->hasOne(Produk::class);
    }

    public function UserID(){
        return $this->hasOne(User::class);
    }

}
