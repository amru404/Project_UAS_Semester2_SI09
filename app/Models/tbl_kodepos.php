<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_kodepos extends Model
{
    use HasFactory;
    protected $table = ('tbl_kodepos');
    protected $fillable = ['kelurahan','kecamatan','kabupaten','provinsi','kodepos'];}
