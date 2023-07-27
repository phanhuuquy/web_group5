<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;
use App\Models\SanPham;
use App\Models\Loai;
use App\Models\GianHang;
use App\Models\KhuyenMai;

class KhuyenMaiController extends Controller
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
        $khuyenmai = KhuyenMai::create([
            'ten_khuyen_mai' => $request->input('ten_khuyen_mai'),
            'gia_tri_khuyen_mai' => $request->input('gia_tri_khuyen_mai'),
            
        ]);
        return redirect('/admin/khuyenmai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // hiển thị
        $data = KhuyenMai::all();
        return view('admin.khuyenmai.khuyenmai', ['khuyenmais'=>$data]);
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
        $data = KhuyenMai::find($id);
        return view('admin.khuyenmai.sua', ['khuyenmai'=>$data]);
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
        $khuyenmai = KhuyenMai::find($request->id_khuyen_mai);
        $khuyenmai['ten_khuyen_mai'] = $request->ten_khuyen_mai;
        $khuyenmai['gia_tri_khuyen_mai'] = $request->gia_tri_khuyen_mai;
      
        $khuyenmai->save();
        return redirect('/admin/khuyenmai');
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
        $data = KhuyenMai::find($id);
        $data->delete();
        return redirect('/admin/khuyenmai');
    }
}
