<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GianHang extends Model
{
    use HasFactory;

    protected $table = "gian_hangs";

    protected $primaryKey = "id_gian_hang";

    protected $fillable = [
        'ten_gianhang',
        'status',
        'id_user',
        'van_chuyen',
        'dia_chi',
        'id_loai',
    ];

    public function products()
    {
        return $this->hasMany(SanPham::class, 'id_gian_hang', 'id_gian_hang');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
