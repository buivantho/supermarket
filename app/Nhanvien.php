<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    protected $table='nhan_vien';
    protected $fillable=['id','ten','gioi_tinh','tuoi'];
}
