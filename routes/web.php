<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhGiaController;

use App\Http\Controllers\DonHangController;
use App\Http\Controllers\GianHangController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\LoaiController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhanQuyenController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\ThayDoiTaiKhoanController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('user.home');
Route::get('/cua-hang/{id_gianhang}', [MainController::class, 'cuahang'])->name('user.gianhang');
Route::get('/cua-hang/loai={loai}', [MainController::class, 'timloai']);
Route::get('/cua-hang/gianhang={gianhang}', [MainController::class, 'timgianhang']);
Route::get('/cua-hang/san-pham/{id_sp}', [MainController::class, 'sanpham']);
Route::post('/tim-kiem', [MainController::class, 'timkiem']);

Route::post('/cua-hang/san-pham/{id}/danh-gia', [DanhGiaController::class, 'store']);

Route::get('/gioi-thieu', [MainController::class, 'aboutUs']);

Route::get('/tai-khoan', [ThayDoiTaiKhoanController::class, 'index']);
Route::post('/tai-khoan/sua', [ThayDoiTaiKhoanController::class, 'update']);

Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
Route::post('/auth/login', [MainController::class, 'checkLogin'])->name('auth.checkLogin');
Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
Route::post('/auth/save', [MainController::class, 'storeReg'])->name('registerStore');
Route::get('/auth/logout', [MainController::class, 'logOut'])->name('auth.logout');

// Giỏ hàng
Route::get('/gio-hang', [GioHangController::class, 'index']);
Route::post('/gio-hang/cap-nhat', [GioHangController::class, 'update']);
Route::get('/gio-hang/xoa/{id}', [GioHangController::class, 'destroy']);
Route::get('/cua-hang/them-gio-hang/{id_sp}', [GioHangController::class, 'themvaogiohang'])->name('them-vao-gio');

// Thanh toán
Route::get('/thanh-toan', [DonHangController::class, 'index']);
Route::post('/thanh-toan', [DonHangController::class, 'thanhtoan']);
Route::post('/thanh-toan/hoadon', [DonHangController::class, 'store']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Tài khoản
Route::get('/admin/taikhoan', [TaiKhoanController::class, 'index']);
Route::get('/admin/taikhoan/them', [TaiKhoanController::class, 'create']);
Route::post('/admin/taikhoan/them', [TaiKhoanController::class, 'store']);
Route::get('/admin/taikhoan/xoa/{id}', [TaiKhoanController::class, 'destroy']);
Route::get('/admin/taikhoan/sua/{id}', [TaiKhoanController::class, 'edit']);
Route::post('/admin/taikhoan/sua', [TaiKhoanController::class, 'update']);

// Gian hàng
Route::group(['prefix' => 'gianhang', 'middleware' => 'auth'], function () {
    Route::get('/', [GianHangController::class, 'index'])->name('gianhang.dangky');
    Route::post('/them', [GianHangController::class, 'store']);
});

Route::get('/admin/gianhang', [GianHangController::class, 'show']);
Route::get('/admin/gianhang/xoa/{id}', [GianHangController::class, 'destroy']);
Route::get('/admin/gianhang/duyet/{id}', [GianHangController::class, 'duyet']);
Route::get('/admin/gianhang/stop/{id}', [GianHangController::class, 'stop']);
Route::get('/admin/gianhang/sua/{id}', [GianHangController::class, 'edit']);
Route::post('/admin/gianhang/sua', [GianHangController::class, 'update']);

// loại sản phẩm
Route::get('/admin/loai', [LoaiController::class, 'index']);
Route::get('/admin/loai/them', [LoaiController::class, 'create']);
Route::post('/admin/loai/them', [LoaiController::class, 'store']);
Route::get('/admin/loai/xoa/{id}', [LoaiController::class, 'destroy']);
Route::get('/admin/loai/sua/{id}', [LoaiController::class, 'edit']);
Route::post('/admin/loai/sua', [LoaiController::class, 'update']);

// Sản phẩm
Route::get('/admin/sanpham', [SanPhamController::class, 'show']);
Route::get('/admin/sanpham/them', [SanPhamController::class, 'create']);
Route::post('/admin/sanpham/them', [SanPhamController::class, 'store']);
Route::get('/admin/sanpham/xoa/{id}', [SanPhamController::class, 'destroy']);
Route::get('/admin/sanpham/sua/{id}', [SanPhamController::class, 'edit']);
Route::post('/admin/sanpham/sua', [SanPhamController::class, 'update']);

// Phân quyền
Route::get('/admin/phanquyen/', [PhanQuyenController::class, 'index']);
Route::get('/admin/phanquyen/them', [PhanQuyenController::class, 'create']);
Route::post('/admin/phanquyen/them', [PhanQuyenController::class, 'store']);
Route::get('/admin/phanquyen/xoa/{id}', [PhanQuyenController::class, 'destroy']);
Route::get('/admin/phanquyen/sua/{id}', [PhanQuyenController::class, 'edit']);
Route::post('/admin/phanquyen/sua', [PhanQuyenController::class, 'update']);

// Hóa đơn
Route::get('/admin/donhang', [DonHangController::class, 'show']);
Route::get('/admin/donhang/xoa/{id}', [DonHangController::class, 'destroy']);
Route::get('/admin/donhang/{id}', [DonHangController::class, 'edit'])->name('order.detail');
Route::get('/admin/donhang/duyet/{id}', [DonHangController::class, 'update']);
