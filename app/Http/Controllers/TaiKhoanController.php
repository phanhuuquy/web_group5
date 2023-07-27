<?php

namespace App\Http\Controllers;

use App\Models\PhanQuyen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TaiKhoanController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'admin.taikhoan.index',
            [
                'users' => User::all()
            ]
        );
    }

    public function create()
    {
        return view('admin.taikhoan.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'ten_nguoi_dung' => $request->input('ten_nguoi_dung'),
            'email' => $request->input('email'),
            'sdt' => $request->input('sdt'),
            'Ten_dang_nhap' => $request->input('Ten_dang_nhap'),
            'password' => Hash::make($request->input('password')),
            'id_phan_quyen' => $request->input('id_phan_quyen'),
        ]);

        return redirect('/admin/taikhoan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::all();
        return view(
            'admin.taikhoan.taikhoan',
            [
                'taikhoans' => $data,
                'roles' => PhanQuyen::all(),
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
        // sửa
        $data = User::find($id);
        return view(
            'admin.taikhoan.sua',
            [
                'data' => $data,
                'roles' => PhanQuyen::all(),
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
        $data = User::find($request->id);
        $data['ten_nguoi_dung'] = $request->ten_nguoi_dung;
        $data['email'] = $request->email;
        $data['sdt'] = $request->sdt;
        $data['Ten_dang_nhap'] = $request->Ten_dang_nhap;
        $data['password'] = Hash::make($request->password);
        $data['id_phan_quyen'] = $request->input('id_phan_quyen');

        $data->save();
        return redirect('/admin/taikhoan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // xóa
        $data = User::find($id);
        $data->delete();
        return redirect('/admin/taikhoan');
    }
}
