<?php

namespace App\Http\Controllers;

use App\Models\GianHang;
use App\Models\GioHang;
use App\Models\KhuyenMai;

use App\Models\Loai;
use App\Models\PhanQuyen;
use App\Models\SanPham;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Auth::user();
        $gianhangs = GianHang::all();
        $loaisps = Loai::all();
        $sps = SanPham::all();
        $users = User::all();
        $phanquyens = PhanQuyen::all();

        $giohangs = Session::get('gio_hang');
        if (!$giohangs) {
            $giohangs = array();
        }

        return view('app.giohang.index')
            ->with('data', $data)
            ->with('gianhangs', $gianhangs)
            ->with('loaisps', $loaisps)
            ->with('sps', $sps)
            ->with('users', $users)
            ->with('phanquyens', $phanquyens)
            ->with('giohangs', $giohangs);
    }

    public function themvaogiohang($id_sp)
    {
        $sp = SanPham::firstWhere('id_sanpham', $id_sp);
        $gio_hang = Session::get('gio_hang');

        $khuyenmais = KhuyenMai::all();

        if (isset($gio_hang[$id_sp])) {
            $gio_hang[$id_sp]['so_luong'] += 1;
        } else {
            $gio_hang[$id_sp] = [
                'hinh_anh_1' => $sp->hinh_anh_1,
                'ten_sanpham' => $sp->ten_sanpham,
                'don_gia' => $sp->don_gia,
                'so_luong' => 1,
                'id_gian_hang' => $sp->id_gian_hang
            ];
        }

        Session::put('gio_hang', $gio_hang);

        return redirect('/cua-hang/san-pham/' . $id_sp);
        // return Session::get('gio_hang');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $sp = SanPham::find($request->id);
        $gio_hang = Session::get('gio_hang');


        $gio_hang[$request->id]['so_luong'] =  $request->so_luong;

        Session::put('gio_hang', $gio_hang);
        // return Session::get('gio_hang');
        return redirect('/gio-hang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gio_hang = Session::get('gio_hang');

        unset($gio_hang[$id]);
        Session::put('gio_hang', $gio_hang);
        return redirect('/gio-hang');
    }
}
