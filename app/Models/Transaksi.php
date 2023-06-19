<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesanan;
use App\Models\User;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['kode','wktu_transaksi','status','pesanan_id','user_id',];

    public function PesananID(){
        return $this->hasOne(Pesanan::class);
    }
    
    public function UserID2(){
        return $this->hasOne(User::class);
    }
}
