<?php

namespace App\Http\Controllers;

use App\Models\GianHang;
use App\Models\KhuyenMai;
use App\Models\Loai;
use App\Models\PhanQuyen;
use App\Models\SanPham;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{

    public function index()
    {
        if (Session::get('gio_hang') == null) {
            $gio_hang = [];
            Session::put('gio_hang', $gio_hang);
        }
        $spmoinhats = SanPham::orderBy('updated_at', 'desc')->get();
        // $spnoibats = SanPham::orderBy('so_luong_mua', 'desc')->get();
        $spnoibats = [];
        $gianhangs = GianHang::where('status', 1)->with('products')->get();

        return view('app.app.body')
            ->with('gianhangs', $gianhangs)
            ->with('spmoinhats', $spmoinhats)
            ->with('spnoibats', $spnoibats);
    }

    public function cuahang(Request $request)
    {
        $gianhangs = GianHang::all();
        $sps = SanPham::where('id_gian_hang', $request->id_gianhang)->paginate(12);
        if (isset($request->from)) {
            if (isset($request->to)) {
                $sps = SanPham::where('id_gian_hang', $request->id_gianhang)
                    ->whereBetween('don_gia', [(int)$request->from, (int)$request->to])
                    ->paginate(12);
            } else $sps = SanPham::where('id_gian_hang', $request->id_gianhang)
                ->where('don_gia', '>', (int)$request->from)
                ->paginate(12);
        }

        return view('app.cuahang.index')
            ->with('gianhangs', $gianhangs)
            ->with('sps', $sps);
    }

    public function thanhtoan()
    {
        $data = Auth::user();
        $gianhangs = GianHang::all();
        $loaisps = Loai::all();
        $sps = SanPham::all();
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        return view('app.cuahang.index')
            ->with('data', $data)
            ->with('gianhangs', $gianhangs)
            ->with('loaisps', $loaisps)
            ->with('sps', $sps)
            ->with('users', $users)
            ->with('phanquyens', $phanquyens)
            ->with('khuyenmais', $khuyenmais);
    }

    public function timkiem(Request $request)
    {
        $gianhangs = GianHang::all();
        $sps = SanPham::where('ten_sanpham', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('don_gia', 'like', '%' . $request->tim_kiem . '%')
            ->paginate(12);

        return view(
            'app.cuahang.search',
            [
                'sps' => $sps,
                'gianhangs'=> $gianhangs
            ]
        );
    }

    public function sanpham($id_sp)
    {
        $data = Auth::user();
        $gianhangs = GianHang::all();
        $loaisps = Loai::all();
        $sp = SanPham::firstWhere('id_sanpham', $id_sp);
        $sptuongtus = SanPham::where('id_loai', $sp->id_loai)->get();
        $danhgias = DB::table('danh_gia')->where('id_sanpham', $sp['id_sanpham'])->paginate(3);
        $danh_gias = Session::get('danh_gias');
        if (!$danh_gias) {
            $danh_gias = [];
        }

        $soluongdanhgia = [];
        $soluongdanhgia['count_danh_gia'] = DB::table('danh_gia')->where('id_sanpham', $sp['id_sanpham'])->count();
        $soluongdanhgia['danh_gia'] = DB::table('danh_gia')->where('id_sanpham', $sp['id_sanpham'])->avg('danh_gia');

        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        $gio_hangs = Session::get('gio_hang');
        if (!$gio_hangs) {
            $gio_hangs = [];
        }

        return view('app.cuahang.sanpham')
            ->with('data', $data)
            ->with('gianhangs', $gianhangs)
            ->with('loaisps', $loaisps)
            ->with('sp', $sp)
            ->with('sptuongtus', $sptuongtus)
            ->with('users', $users)
            ->with('phanquyens', $phanquyens)
            ->with('khuyenmais', $khuyenmais)
            ->with('danh_gias', $danh_gias)
            ->with('danhgias', $danhgias)
            ->with('soluongdanhgia', $soluongdanhgia)
            ->with('gio_hangs', $gio_hangs);
    }

    //

    public function timloai($loai)
    {
        $data = Auth::user();
        $gianhangs = GianHang::all();
        $loaisps = Loai::all();
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        $sps = SanPham::where('ten', $loai)->paginate(9);

        return view('app.cuahang.index')
            ->with('data', $data)
            ->with('gianhangs', $gianhangs)
            ->with('loaisps', $loaisps)
            ->with('sps', $sps)
            ->with('users', $users)
            ->with('phanquyens', $phanquyens)
            ->with('khuyenmais', $khuyenmais)
            ->with('timloai', $loai)
            ->with('timgianhang', '');
    }

    public function timgianhang($gianhang)
    {
        $data = Auth::user();
        $gianhangs = GianHang::all();
        $loaisps = Loai::all();
        $sps = SanPham::where('ten_gianhang', $gianhang)->paginate(9);
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        return view('app.cuahang.index')
            ->with('data', $data)
            ->with('gianhangs', $gianhangs)
            ->with('loaisps', $loaisps)
            ->with('sps', $sps)
            ->with('users', $users)
            ->with('phanquyens', $phanquyens)
            ->with('khuyenmais', $khuyenmais)
            ->with('timgianhang', $gianhang)
            ->with('timloai', '');
    }

    public function aboutUs()
    {
        return view('app.cuahang.index')->with('route', 'gioi-thieu');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    // Register;
    public function storeReg(Request $request)
    {
        User::create([
            'ten_nguoi_dung' => $request->input('ten_nguoi_dung'),
            'email' => $request->input('email'),
            'sdt' => $request->input('sdt'),
            'Ten_dang_nhap' => $request->input('Ten_dang_nhap'),
            'password' => Hash::make($request->input('password')),
            'id_phan_quyen' => '3',
        ]);

        return redirect()->route('auth.login');
    }

    // Login Check;
    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns,rfc',
            'password' => 'required|min:1',
        ]);

        $checkLogin = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if (!$checkLogin) {
            return back()->with('thatbai', '* Tài khoản hoặc mật khẩu không chính xác, vui lòng nhập lại');
        }

        return redirect()->route(Auth::id() === 1 ? 'admin.index' : 'user.home');
    }

    function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->route('auth.login');
    }
}
