<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_dh',
        'id_sp',
        'quantity',
        'price',
    ];

    public function order()
    {
        return $this->hasOne(DonHang::class, 'id_don_hang', 'id_dh');
    }

    public function product()
    {
        return $this->hasOne(SanPham::class, 'id_sanpham', 'id_sp');
    }
}
