<?php

namespace App\Http\Controllers;

use App\Models\GianHang;
use App\Models\Loai;
use App\Models\SanPham;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loais = Loai::all();
        return view('admin.loai.index', ['loais' => $loais]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loai.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loai = Loai::create([
            'ten' => $request->input('ten'),

        ]);
        return redirect('/admin/loai');
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
        $data = Loai::find($id);
        return view(
            'admin.loai.sua',
            ['loai' => $data]
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
        $loai = Loai::find($request->id);
        $loai->update([
            'ten' => $request->ten
        ]);

        return redirect('/admin/loai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Loai::find($id);
        $data->delete();

        return redirect('/admin/loai');
    }
}
