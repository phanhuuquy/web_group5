@extends('admin.index')

@section('admin_content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="" style="margin-top: 10px">
                <strong>XEM CHI TIẾT ĐƠN HÀNG</strong>&ensp;
                {!! App\Helpers\Helper::getOrderStatus($donhang->status) !!}
            </h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <!-- table-hover -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donhang->details as $detail)
                            <tr>
                                <td scope="row">{{ $detail->product->ten_sanpham }} </td>
                                <td>{{ number_format($detail->product->don_gia) }} VNĐ</td>
                                <td>{{ $detail->quantity }}</td>
                                <td>{{ number_format($detail->product->don_gia * $detail->quantity) }} VNĐ</td>
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
            @if ($donhang->status === 0)
                <a href="/admin/donhang/duyet/{{ $donhang->id_don_hang }}" type="button" class="btn btn-success">Duyệt đơn
                    hàng</a>
            @elseif ($donhang->status === 1)
                <a href="/admin/donhang/duyet/{{ $donhang->id_don_hang }}" type="button" class="btn btn-danger">Hủy đơn
                    hàng</a>
            @else
            @endif
        </div>
    </div>
    <br>
@endsection
