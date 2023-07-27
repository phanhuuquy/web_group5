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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $sps = SanPham::all();
        $loaisps = Loai::all();
        $gianhangs = GianHang::all();
        $khuyenmais = KhuyenMai::all();
        $phanquyens = PhanQuyen::all();
        $donhangs = DonHang::all();

        return view('admin.trangchu.trangchu')
            ->with('data', Auth::user())
            ->with('route', 'TrangChu')
            ->with('users', $users)
            ->with('sps', $sps)
            ->with('loaisps', $loaisps)
            ->with('gianhangs', $gianhangs)
            ->with('khuyenmais', $khuyenmais)
            ->with('phanquyens', $phanquyens)
            ->with('donhangs', $donhangs);
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
    public function update(Request $request, $id)
    {
        //
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
    }

    public function dieuhuong($slug)
    {
        if (Auth::user()->id_phan_quyen === 1) {
            $data = Auth::user();
            $gianhangs = GianHang::all();
            $loaisps = Loai::all();
            $sps = SanPham::all();
            $users = User::all();
            $khuyenmais = KhuyenMai::all();
            $phanquyens = PhanQuyen::all();
            $donhangs = DonHang::all();

            return view("admin.{$slug}.{$slug}")
                ->with('data', $data)
                ->with('gianhangs', $gianhangs)
                ->with('loaisps', $loaisps)
                ->with('sps', $sps)
                ->with('users', $users)
                ->with('khuyenmais', $khuyenmais)
                ->with('phanquyens', $phanquyens)
                ->with('donhangs', $donhangs);
        } else {
            return redirect('/');
        }
    }

    public function dieuhuong2($slug, $slug2)
    {
        if (Auth::user()->id_phan_quyen === 1) {
            $data = Auth::user();
            $gianhangs = GianHang::all();
            $loaisps = Loai::all();
            $sps = SanPham::all();
            $users = User::all();
            $phanquyens = PhanQuyen::all();
            $khuyenmais = KhuyenMai::all();
            $donhangs = DonHang::all();

            return view("admin.{$slug}.{$slug2}")
                ->with('data', $data)
                ->with('gianhangs', $gianhangs)
                ->with('loaisps', $loaisps)
                ->with('sps', $sps)
                ->with('users', $users)
                ->with('phanquyens', $phanquyens)
                ->with('khuyenmais', $khuyenmais)
                ->with('donhangs', $donhangs);
        } else {
            return redirect('/');
        }
    }
}
