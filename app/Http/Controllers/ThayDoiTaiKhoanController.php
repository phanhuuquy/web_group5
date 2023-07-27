<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use App\Models\GianHang;
use App\Models\KhuyenMai;
use App\Models\Loai;
use App\Models\PhanQuyen;
use App\Models\SanPham;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ThayDoiTaiKhoanController extends Controller
{

    public function index(){
        $data = Auth::user();
        $gianhangs = GianHang::all();
        $loaisps = Loai::all();
        $sps = SanPham::all();
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        return view('app.taikhoan.index')
        ->with('data', $data)
        ->with('gianhangs', $gianhangs)
        ->with('loaisps', $loaisps)
        ->with('sps', $sps)
        ->with('users', $users)
        ->with('phanquyens', $phanquyens)
        ->with('khuyenmais', $khuyenmais)
        ;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // update
        $data = User::find($request->id);
        $data['ten_nguoi_dung'] = $request->ten_nguoi_dung;
        $data['email'] = $request->email;
        $data['sdt'] = $request->sdt;
        $data['Ten_dang_nhap'] = $request->Ten_dang_nhap;
        $data['password'] = Hash::make($request->password);

        $data->save();
        return redirect('/');

    }

}
