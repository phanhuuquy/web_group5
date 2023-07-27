@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>THÊM SẢN PHẨM</strong>&ensp;
            <i class="fas fa-list"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/admin/sanpham/them" method="POST" enctype="multipart/form-data">
                @csrf
                <br>
                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_sanpham" required />
                    <label class="form-label">Tên sản phẩm</label>
                </div>
                <label class="form-label"><b>Mô tả:</b></label>
                <div class="form-outline mb-4">
                    <textarea type="input" class="form-control" name="mo_ta" autocomplete="off" id="ckediter" /></textarea>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="don_gia" required />
                    <label class="form-label">Đơn giá</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="so_luong" required />
                    <label class="form-label">Số lượng</label>
                </div>

                <label class="form-label"><b>Hình ảnh 1:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_1" />
                </div>

                <label class="form-label"><b>Hình ảnh 2:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_2" />
                </div>

                <label class="form-label"><b>Hình ảnh 3:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_3" />
                </div>

                <label class="form-label"><b>Hình ảnh 4:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_4" />
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="/admin/sanpham" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>

@endsection




