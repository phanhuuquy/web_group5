<?php

namespace App\Http\Controllers;

use App\Models\GianHang;
use App\Models\Loai;
use App\Models\PhanQuyen;

use App\Models\SanPham;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class PhanQuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PhanQuyen::all();
        return view('admin.phanquyen.index', ['phanquyens' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.phanquyen.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phanquyen = PhanQuyen::create([
            'ten_phan_quyen' => $request->input('ten_phan_quyen'),

        ]);
        return redirect('/admin/phanquyen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // hiển th
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
        $data = PhanQuyen::find($id);
        return view('admin.phanquyen.sua', ['phanquyen' => $data]);
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
        $phanquyen = PhanQuyen::find($request->id_phan_quyen);
        $phanquyen['ten_phan_quyen'] = $request->ten_phan_quyen;

        $phanquyen->save();
        return redirect('/admin/phanquyen');
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
        $data = PhanQuyen::find($id);
        $data->delete();
        return redirect('/admin/phanquyen');
    }
}
