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

    
    public static function addOrder($input)
    {
        return self::create($input);
    }

    public function Produk() {
    return $this->belongsTo(Produk::class, 'produk_id');
        }
    public function UserID(){
        return $this->hasOne(User::class);
    }

}
