@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>SỬA SẢN PHẨM</strong>&ensp;
            <i class="fas fa-list"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/admin/sanpham/sua" method="POST" enctype="multipart/form-data">
                @csrf
                <br>
                <input type="hidden" class="form-control" name="id_sanpham" value="{{$sp['id_sanpham']}}"/>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_sanpham" value="{{$sp['ten_sanpham']}}" required />
                    <label class="form-label">Tên sản phẩm</label>
                </div>
                <label class="form-label" for="ckediter"><b>Mô tả:</b></label>
                <div class="form-outline mb-4">
                    <textarea type="input" class="form-control" id="ckediter" name="mo_ta" >{{$sp['mo_ta']}}</textarea>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="don_gia" value="{{$sp['don_gia']}}" required />
                    <label class="form-label">Đơn giá</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="so_luong" value="{{$sp['so_luong']}}" required />
                    <label class="form-label">Số lượng</label>
                </div>

                <label class="form-label"><b>Hình ảnh 1:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_1" value="{{$sp['hinh_anh_1']}}">
                </div>

                <label class="form-label"><b>Hình ảnh 2:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_2" value="{{$sp['hinh_anh_2']}}" />
                </div>

                <label class="form-label"><b>Hình ảnh 3:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_3" value="{{$sp['hinh_anh_3']}}" />
                </div>

                <label class="form-label"><b>Hình ảnh 4:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_4" value="{{$sp['hinh_anh_4']}}" />
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_khuyen_mai" list="khuyen_mai" autocomplete="off" value="{{$sp['ten_khuyen_mai']}}"  />
                    <label class="form-label">Khuyễn mãi</label>
                    <datalist id="khuyen_mai">
                        @foreach ($khuyenmais as $khuyenmai)
                            <option value="{{$khuyenmai['ten_khuyen_mai']}}">
                        @endforeach
                    </datalist>
                </div>

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/admin/sanpham" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>

@endsection