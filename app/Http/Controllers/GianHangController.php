<?php

namespace App\Http\Controllers;

use App\Models\GianHang;
use App\Models\Loai;
use App\Models\SanPham;

use App\Models\User;
use App\Models\VanChuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class GianHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.gianhang.index', [
            'title' => 'Đăng ký gian hàng',
            'categories' => Loai::all(),
            'van_chuyens' => VanChuyen::all(),
        ]);
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
        // dd($request->all());
        GianHang::updateOrCreate(
            ['id_user' => Auth::id()],
            [
                'ten_gianhang' => $request->input('ten_gianhang'),
                'dia_chi' => $request->input('dia_chi'),
                'van_chuyen' => $request->input('van_chuyen'),
                'status' => 0,
                'id_loai' => $request->input('id_loai'),
            ]
        );

        return redirect()->route('user.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = GianHang::with('user')->get();
        return view(
            'admin.gianhang.index',
            ['gianhangs' => $data]
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
        /// sửa
        $data = GianHang::find($id);
        return view(
            'admin.gianhang.sua',
            ['gianhang' => $data]
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
        $gianhang = GianHang::firstWhere('id_gian_hang', $request->id_gian_hang);
        $gianhang->update([
            'ten_gianhang' => $request->ten_gianhang
        ]);

        return redirect('/admin/gianhang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gh = GianHang::with('user')->firstWhere('id_gian_hang', $id);
        User::where('id', $gh->user->id)->update([
            'id_phan_quyen' => '3'
        ]);
        $gh->delete();
        return redirect('/admin/gianhang');
    }

    public function duyet($id)
    {
        $gianhang = GianHang::with('user')->firstWhere('id_gian_hang', $id);
        User::where('id', $gianhang->user->id)->update([
            'id_phan_quyen' => '2'
        ]);
        $gianhang->update([
            'status' => 1
        ]);

        return redirect('/admin/gianhang');
    }

    public function stop($id)
    {
        $gianhang = GianHang::firstWhere('id_gian_hang', $id);
        $gianhang->update([
            'status' => 2
        ]);

        return redirect('/admin/gianhang');
    }
}
