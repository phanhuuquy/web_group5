@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>QUẢN LÝ SẢN PHẨM</strong>&ensp;
            <i class="fas fa-list"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <!-- table-hover -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Hình ảnh 1</th>
                        <th scope="col">Thay đổi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sps as $sp)
                    <tr>
                        <th scope="row">{{$sp['id_sanpham']}}</th>
                        <td>{{$sp['ten_sanpham']}}</td>
                        <td>{{$sp['don_gia']}}</td>
                        <td>{{$sp['hinh_anh_1']}}</td>
                        <td>
                            <a href="/admin/sanpham/sua/{{$sp['id_sanpham']}}" type="button" class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/admin/sanpham/xoa/{{$sp['id_sanpham']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                class="btn btn-danger btn-rounded">Xóa</a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>

            <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
            </script>
        </div>
    </div>

</div>


<div class="card shadow">
    <div class="card-header">
        <h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5>
    </div>
    <div class="card-body">

        <a href="/admin/sanpham/them" type="button" class="btn btn-info">Thêm</a>

    </div>
</div>



<br>
@endsection