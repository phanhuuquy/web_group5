<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $table = "don_hang";

    protected $primaryKey = "id_don_hang";

    protected $fillable = [
        'ten_nguoi_nhan',
        'sdt',
        'hinh_thuc_thanh_toan',
        'dia_chi_nhan',
        'ghi_chu',
        'tong_tien',
        'hoa_don',
        'id_gian_hang',
        'van_chuyen',
        'status',
    ];

    public function gianhang()
    {
        return $this->hasOne(GianHang::class, 'id_gian_hang', 'id_gian_hang');
    }

    public function details()
    {
        return $this->hasMany(ChiTietDonHang::class, 'id_dh', 'id_don_hang');
    }
}
