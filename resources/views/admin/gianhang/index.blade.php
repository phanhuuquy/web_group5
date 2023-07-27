@extends('admin.index')
@section('admin_content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="" style="margin-top: 10px">
                <strong>QUẢN LÝ GIAN HÀNG</strong>&ensp;
                <i class="fas fa-trademark"></i>
            </h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <!-- table-hover -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên gian hàng</th>
                            <th scope="col">Chủ gian hàng</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thay đổi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gianhangs as $gianhang)
                            <tr>
                                <th scope="row">{{ $gianhang['id_gian_hang'] }}</th>
                                <td>{{ $gianhang['ten_gianhang'] }}</td>
                                <td>{{ $gianhang->user->ten_nguoi_dung }}</td>
                                <td class="{{ (int) $gianhang['status'] }}">
                                    {!! App\Helpers\Helper::getShopStatus((int) $gianhang['status']) !!}
                                </td>
                                <td>
                                    <a href="/admin/gianhang/sua/{{ $gianhang['id_gian_hang'] }}" type="button"
                                        class="btn btn-warning btn-rounded">Sửa</a>
                                    <a href="/admin/gianhang/xoa/{{ $gianhang['id_gian_hang'] }}"
                                        onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                        class="btn btn-danger btn-rounded">Xóa</a>
                                    @if ((int) $gianhang['status'] === 0)
                                        <a href="/admin/gianhang/duyet/{{ $gianhang['id_gian_hang'] }}" type="button"
                                            class="btn btn-success btn-rounded">Duyệt</a>
                                    @elseif ((int) $gianhang['status'] === 2)
                                        <a href="/admin/gianhang/duyet/{{ $gianhang['id_gian_hang'] }}" type="button"
                                            class="btn btn-info btn-rounded">Tiếp tục</a>
                                    @elseif ((int) $gianhang['status'] === 1)
                                        <a href="/admin/gianhang/stop/{{ $gianhang['id_gian_hang'] }}" type="button"
                                            class="btn btn-info btn-rounded">Tạm dừng</a>
                                    @endif
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

            <a href="/admin/gianhang/them" type="button" class="btn btn-info">Thêm Gian hàng</a>

        </div>
    </div>



    <br>
@endsection
