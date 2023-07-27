<?php

namespace App\Http\Controllers;

use App\Models\GianHang;
use App\Models\KhuyenMai;
use App\Models\Loai;
use App\Models\SanPham;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gianhangs = GianHang::all();
        $loaisps = Loai::all();
        return view(
            'admin.sanpham.them',
            [
                'loaisps' => $loaisps,
                'gianhangs' => $gianhangs,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hinh1 = "";
        $hinh2 = "";
        $hinh3 = "";
        $hinh4 = "";

        if ($request->file('hinh_anh_1')) {
            $filename1 = $request->file('hinh_anh_1');
            $hinh1 = $filename1->getClientOriginalName();
            $filename1->move(public_path('storage/images'), $hinh1);
        }
        if ($request->file('hinh_anh_2')) {
            $filename2 = $request->file('hinh_anh_2');
            $hinh2 = $filename2->getClientOriginalName();
            $filename2->move(public_path('storage/images'), $hinh2);
        } else {
            $hinh2 = $hinh1;
        }
        if ($request->file('hinh_anh_3')) {
            $filename3 = $request->file('hinh_anh_3');
            $hinh3 = $filename3->getClientOriginalName();
            $filename3->move(public_path('storage/images'), $hinh3);
        } else {
            $hinh3 = $hinh1;
        }
        if ($request->file('hinh_anh_4')) {
            $filename4 = $request->file('hinh_anh_4');
            $hinh4 = $filename4->getClientOriginalName();
            $filename4->move(public_path('storage/images'), $hinh4);
        } else {
            $hinh4 = $hinh1;
        }
        $user_id = Auth::id();
        $gian_hang = GianHang::firstWhere('id_user', $user_id);

        SanPham::create([
            'ten_sanpham' => $request->input('ten_sanpham'),
            'mo_ta' => $request->input('mo_ta'),
            'don_gia' => $request->input('don_gia'),
            'so_luong' => $request->input('so_luong'),
            'hinh_anh_1' => $hinh1,
            'hinh_anh_2' => $hinh2,
            'hinh_anh_3' => $hinh3,
            'hinh_anh_4' => $hinh4,
            'id_loai' => (int) $gian_hang->id_loai,
            'id_gian_hang' => (int) $gian_hang->id_gian_hang,
        ]);

        return redirect('/admin/sanpham');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = Auth::id();
        $gh = GianHang::firstWhere('id_user', $user_id);
        $sp = SanPham::where('id_gian_hang', $gh->id_gian_hang)->get();
        return view('admin.sanpham.index', ['sps' => $sp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sp = SanPham::find($id);
        $loaisps = Loai::all();
        $gianhangs = GianHang::all();
        $khuyenmais = KhuyenMai::all();

        return view(
            'admin.sanpham.sua',
            [
                'sp' => $sp,
                'loaisps' => $loaisps,
                'gianhangs' => $gianhangs,
                'khuyenmais' => $khuyenmais,
            ]
        );
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
        $hinh1 = "";
        $hinh2 = "";
        $hinh3 = "";
        $hinh4 = "";

        if ($request->file('hinh_anh_1')) {
            $filename1 = $request->file('hinh_anh_1');
            $hinh1 = $filename1->getClientOriginalName();
            $filename1->move(public_path('storage/images'), $hinh1);
        }
        if ($request->file('hinh_anh_2')) {
            $filename2 = $request->file('hinh_anh_2');
            $hinh2 = $filename2->getClientOriginalName();
            $filename2->move(public_path('storage/images'), $hinh2);
        } else {
            $hinh2 = $hinh1;
        }
        if ($request->file('hinh_anh_3')) {
            $filename3 = $request->file('hinh_anh_3');
            $hinh3 = $filename3->getClientOriginalName();
            $filename3->move(public_path('storage/images'), $hinh3);
        } else {
            $hinh3 = $hinh1;
        }
        if ($request->file('hinh_anh_4')) {
            $filename4 = $request->file('hinh_anh_4');
            $hinh4 = $filename4->getClientOriginalName();
            $filename4->move(public_path('storage/images'), $hinh4);
        } else {
            $hinh4 = $hinh1;
        }

        $sp = SanPham::find($request->id_sanpham);
        $sp['ten_sanpham'] = $request->ten_sanpham;
        $sp['mo_ta'] = $request->mo_ta;
        $sp['don_gia'] = $request->don_gia;
        $sp['so_luong'] = $request->so_luong;
        $sp['hinh_anh_1'] = $hinh1;
        $sp['hinh_anh_2'] = $hinh2;
        $sp['hinh_anh_3'] = $hinh3;
        $sp['hinh_anh_4'] = $hinh4;

        $sp->save();
        return redirect('/admin/sanpham');

        // return $request->file('hinh_anh_1')->storeAs('public/images', $hinh1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /// xóa
        $data = SanPham::find($id);
        $data->delete();
        return redirect('/admin/sanpham');
    }
}
