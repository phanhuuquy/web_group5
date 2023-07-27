@extends('app.index')

@section('content')
    <div class="card mb-3 shadow-5" style="background-color: #EEEEEE">
        <div class="card-body" style="margin-top:40px">
            <center>
                <h3 class="card-title">CỬA HÀNG</h3>
            </center>
        </div>
        <br>
    </div>

    <div class="container">
        <br>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cửa hàng</li>
            </ol>
        </nav>

        <br>
        <div class="row">
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header" style="margin-top:10px">
                        <center>
                            <h5>DANH MỤC</h5>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                        data-mdb-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <i class="fas fa-trademark"></i>&nbsp; GIAN HÀNG
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-mdb-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            @foreach ($gianhangs as $gianhang)
                                                <li class="list-group-item">
                                                    <a href="/cua-hang/{{ $gianhang['id_gian_hang'] }}"
                                                        class="text-dark">{{ $gianhang['ten_gianhang'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-xl-9">
                <div class="row">
                    @foreach ($sps as $sp)
                        <div class="col-md-4">
                            <div class="card" style="margin-bottom: 25px">
                                <a href="/cua-hang/san-pham/{{ $sp->id_sanpham }}">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <center><img src="/storage/images/{{ $sp->hinh_anh_1 }}" class="img-fluid"
                                                style="height:306px; width:306px" /></center>
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <h4 class="card-title">{{ $sp->ten_sanpham }}</h4>
                                            <p class="card-text text-success">
                                                <b>{{ number_format($sp->don_gia, 0, ',', ',') }} VNĐ</b>
                                            </p>
                                        </center>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <br>
                <div class="pagination pagination-circle justify-content-end">
                    <center>{{ $sps->links() }}</center>
                </div>

            </div>
        </div>

        <br>
        <br>
        <br>
    </div>
@endsection
