<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\DonHang;
use App\Models\GianHang;
use App\Models\KhuyenMai;
use App\Models\Loai;
use App\Models\PhanQuyen;
use App\Models\SanPham;
use App\Models\User;
use App\Models\VanChuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()) {
            return view('auth.login');
        } else {
            $data = Auth::user();
            $gianhangs = GianHang::all();
            $loaisps = Loai::all();
            $sps = SanPham::all();
            $users = User::all();
            $phanquyens = PhanQuyen::all();
            $khuyenmais = KhuyenMai::all();
            $giohangs = Session::get('gio_hang');
            if (!$giohangs) {
                $giohangs = array();
            }

            return view('app.thanhtoan.index')
                ->with('data', $data)
                ->with('gianhangs', $gianhangs)
                ->with('loaisps', $loaisps)
                ->with('sps', $sps)
                ->with('users', $users)
                ->with('phanquyens', $phanquyens)
                ->with('khuyenmais', $khuyenmais)
                ->with('van_chuyens', VanChuyen::all())
                ->with('giohangs', $giohangs);
        }
    }

    public function thanhtoan(Request $request)
    {

        $giohangs = Session::get('gio_hang');
        if (!$giohangs) {
            $giohangs = array();
        }

        $thanhtoans = array();

        $check_gio_hangs = $request->input('check-gio-hang');
        foreach ($check_gio_hangs as $check_gio_hang) {
            foreach ($giohangs as $id => $giohang) {
                if ($check_gio_hang == $id) {
                    $thanhtoans[$id] = $giohang;
                }
            }
        }

        if (!Auth::user()) {
            return view('auth.login');
        } else {
            $data = Auth::user();
            $gianhangs = GianHang::all();
            $loaisps = Loai::all();
            $sps = SanPham::all();
            $users = User::all();
            $phanquyens = PhanQuyen::all();
            $khuyenmais = KhuyenMai::all();

            return view('app.thanhtoan.index')
                ->with('data', $data)
                ->with('gianhangs', $gianhangs)
                ->with('loaisps', $loaisps)
                ->with('sps', $sps)
                ->with('van_chuyens', VanChuyen::all())
                ->with('users', $users)
                ->with('phanquyens', $phanquyens)
                ->with('khuyenmais', $khuyenmais)
                ->with('giohangs', $thanhtoans);
        }
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
        $carts = Session::get('gio_hang');
        if (count($carts) > 0) {
            $numbers = array_unique(collect($carts)->pluck('id_gian_hang')->toArray());
            foreach ($numbers as $id_gian_hang) {
                $data[$id_gian_hang] = collect($carts)->where('id_gian_hang', $id_gian_hang)->toArray();
            }
            foreach ($data as $key => $products) {
                $total = 0;
                foreach ($products as $product) {
                    $total += (int)$product['so_luong'] * (int)$product['don_gia'];
                }
                $donhang = DonHang::create([
                    'ten_nguoi_nhan' => $request->input('ten_nguoi_nhan'),
                    'sdt' => $request->input('sdt'),
                    'dia_chi_nhan' => $request->input('dia_chi_nhan'),
                    'ghi_chu' => $request->input('ghi_chu'),
                    'tong_tien' => $total,
                    'hoa_don' => $request->input('thanh_toans'),
                    'hinh_thuc_thanh_toan' => $request->input('hinh_thuc_thanh_toan'),
                    'status' => 0,
                    'van_chuyen' => $request->input('van_chuyen'),
                    'id_gian_hang' =>  $key
                ]);
                $data_ctdh = [];
                foreach ($products as $key => $product) {
                    $data_ctdh[] = [
                        'id_dh' => $donhang->id_don_hang,
                        'id_sp' => $key,
                        'quantity' => $product['so_luong'],
                        'price' => $product['don_gia'],
                    ];
                }
                ChiTietDonHang::insert($data_ctdh);
            }
            Session::put('gio_hang', []);
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::with('shop')->firstWhere('id', Auth::id());
        $donhangs = DonHang::where('id_gian_hang', $user->shop->id_gian_hang)->get();
        return view(
            'admin.donhang.index',
            [
                'donhangs' => $donhangs
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donhang = DonHang::with('details')->firstWhere('id_don_hang', $id);
        // dd($donhang);
        return view(
            'admin.donhang.edit',
            [
                'donhang' => $donhang
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
    public function update($id)
    {
        $order = DonHang::firstWhere('id_don_hang', $id);
        $order->update([
            'status' => $order->status === 0 ? 1 : ($order->status === 1 ? 2 : 3)
        ]);

        return redirect()->route('order.detail', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DonHang::find($id);
        $data->delete();

        return redirect('/admin/donhang');
    }
}
