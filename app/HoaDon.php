<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table='hoa_don';
    protected $fillable=['id','ma_don_hang','tong'];
}
