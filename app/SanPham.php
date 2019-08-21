<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table='san_pham';
    protected $fillable=['id','ten','id_danh_muc','so_luong','gia'];
}
