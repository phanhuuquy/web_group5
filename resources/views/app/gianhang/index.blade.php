@extends('app.index')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('content')
    <div class="card mb-3 shadow-5" style="background-color: #EEEEEE">
        <div class="card-body" style="margin-top:40px">
            <center>
                <h3 class="card-title">GIAN HÀNG</h3>
            </center>
        </div>
        <br>
    </div>
    <div class="container">
        <br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gian hàng</li>
            </ol>
        </nav>
        <form class="regis-shop" style="width: 50%" action="/gianhang/them" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên gian hàng</label>
                <input name="ten_gianhang" type="text" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>Ngành hàng</label>
                <select class="form-control" name="id_loai">
                    @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['ten'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Địa chỉ shop</label>
                <input name="dia_chi" type="text" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>Bên vận chuyển</label>
                <select class="form-control" name="van_chuyen">
                    @foreach ($van_chuyen as $vc)
                        <option value="{{ $vc->id }}">{{ $vc->name }}</option>
                    @endforeach
                </select>
            </div>
            <br />
            <button class="btn btn-success btn-rounded" type="submit">Đăng ký</button>
        </form>
    </div>
    <br />
@endsection
