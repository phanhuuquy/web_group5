<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $primaryKey = "id_sanpham";

    protected $fillable = [
        'ten_sanpham',
        'id_loai',
        'id_gian_hang',
        'mo_ta',
        'don_gia',
        'so_luong',
        'hinh_anh_1',
        'hinh_anh_2',
        'hinh_anh_3',
        'hinh_anh_4',
    ];

    public function gianhang()
    {
        return $this->hasOne(GianHang::class, 'id_gian_hang', 'id_gian_hang');
    }
}
