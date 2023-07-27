@extends('app.index')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('content')
    <div class="container">
        <br>
        <div class="card mb-3 shadow-1">
            <div class="card-body" style="margin-top:40px">
                <center>
                    <h3 class="card-title" style="text-transform: uppercase;">GIAN HÀNG</h3>
                </center>
            </div>
            <br>
        </div>
        <!-- Tabs content -->
        <div class="tab-content" id="ex2-content">
            @foreach ($gianhangs as $gianhang)
                <div class="tab-pane fade show active">
                    <h4><a
                            href="{{ route('user.gianhang', ['id_gianhang' => $gianhang->id_gian_hang]) }}">{{ $gianhang->ten_gianhang }} >></a>
                    </h4>
                    @php
                        $products = $gianhang->products;
                    @endphp
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-3">
                                <div class="card" style="margin-bottom: 25px">
                                    <a href="/cua-hang/san-pham/{{ $product['id_sanpham'] }}">
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                            <center><img src="/storage/images/{{ $product->hinh_anh_1 }}" class="img-fluid"
                                                    style="height:306px; width:306px" /></center>
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                        </div>
                                        <div class="card-body">
                                            <center>
                                                <h4 class="card-title">{{ $product['ten_sanpham'] }}</h4>
                                                <p class="card-text text-success">
                                                    <b>{{ number_format($product['don_gia'], 0, ',', ',') }} VNĐ</b>
                                                    <del class="card-text text-danger">{{ number_format($product['don_gia'], 0, ',', ',') }}
                                                        VNĐ </del>
                                                </p>
                                            </center>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card mb-3 shadow-1">
            <div class="card-body" style="margin-top:40px">
                <center>
                    <h3 class="card-title" style="text-transform: uppercase;">SẢN PHẨM MỚI NHẤT</h3>
                </center>
            </div>
            <br>
        </div>

        <div id="carouselExampleControls2" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        @if ($dem = 1)
                        @endif
                        @foreach ($spmoinhats as $spmoinhat)
                            @if ($dem < 5)
                                <div class="col-md-3">
                                    <div class="card" style="margin-bottom: 25px">
                                        <a href="/cua-hang/san-pham/{{ $spmoinhat->id_sanpham }}">
                                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                                <center><img src="/storage/images/{{ $spmoinhat->hinh_anh_1 }}"
                                                        class="img-fluid" style="height:306px; width:306px" /></center>
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <center>
                                                    <h4 class="card-title">{{ $spmoinhat->ten_sanpham }}</h4>
                                                    <p class="card-text text-success">
                                                        <b>{{ number_format($spmoinhat->don_gia, 0, ',', ',') }}
                                                            VNĐ</b>
                                                        <del class="card-text text-danger">{{ number_format($spmoinhat->don_gia, 0, ',', ',') }}
                                                            VNĐ </del>
                                                    </p>
                                                </center>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @if ($dem = $dem + 1)
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        @if ($dem = 1)
                        @endif
                        @foreach ($spmoinhats as $spmoinhat)
                            @if ($dem < 5 && $spmoinhat->id_sanpham > 5)
                                <div class="col-md-3">
                                    <div class="card" style="margin-bottom: 25px">
                                        <a href="/cua-hang/san-pham/{{ $spmoinhat->id_sanpham }}">
                                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                                <center><img src="/storage/images/{{ $spmoinhat->hinh_anh_1 }}"
                                                        class="img-fluid" style="height:306px; width:306px" /></center>
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <center>
                                                    <h4 class="card-title">{{ $spmoinhat->ten_sanpham }}</h4>
                                                    <p class="card-text text-success">
                                                        <b>{{ number_format($spmoinhat->don_gia, 0, ',', ',') }}
                                                            VNĐ</b>
                                                        <del class="card-text text-danger">{{ number_format($spmoinhat->don_gia, 0, ',', ',') }}
                                                            VNĐ </del>
                                                    </p>
                                                </center>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @if ($dem = $dem + 1)
                                @endif
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        @if ($dem = 1)
                        @endif
                        @foreach ($spmoinhats as $spmoinhat)
                            @if ($dem < 5 && $spmoinhat->id_sanpham > 9)
                                <div class="col-md-3">
                                    <div class="card" style="margin-bottom: 25px">
                                        <a href="/cua-hang/san-pham/{{ $spmoinhat->id_sanpham }}">
                                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                                <center><img src="/storage/images/{{ $spmoinhat->hinh_anh_1 }}"
                                                        class="img-fluid" style="height:306px; width:306px" /></center>
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <center>
                                                    <h4 class="card-title">{{ $spmoinhat->ten_sanpham }}</h4>
                                                    <p class="card-text text-success">
                                                        <b>{{ number_format($spmoinhat->don_gia, 0, ',', ',') }}
                                                            VNĐ</b>
                                                        <del class="card-text text-danger">{{ number_format($spmoinhat->don_gia, 0, ',', ',') }}
                                                            VNĐ </del>
                                                    </p>
                                                </center>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @if ($dem = $dem + 1)
                                @endif
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls2"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls2"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <br>
    </div>
@endsection
