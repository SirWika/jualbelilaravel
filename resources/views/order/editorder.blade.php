@extends('layouts.re')
@section('title', 'ORDER')
@section('container')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            @if ($message = Session::get('error'))
                <div class="alert alert-danger" role="alert" id="success-alert">
                    {{ $message }}
                </div>
                <script>
                    $(document).ready(function() {
                        $("#success-alert").fadeTo(3000, 500).slideUp(500, function() {
                            $("#success-alert").slideUp(500);
                        });
                    });
                </script>
            @endif
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="/tambahorder">Edit</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/order">Kembali</a>
                    </li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-8 order-lg-1">
                                <h4 class="mb-3">Tambah Data Order</h4>
                                <form class="needs-validation" novalidate="" method="POST" action="/updatedataorder/{{ $data->id_order }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="id_user" class="form-label">Id Pelanggan</label>
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <select class="default-select form-control wide w-80" class="form-control"
                                                id="id_user" name="id_user">
                                                <option selected>{{ $data->id_user }}</option>
                                                @foreach ($pell as $pell )
                                                <option value={{ $pell->id_user }}>{{ $pell->id_user }} | {{ $pell->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_produk" class="form-label">Id Produk</label>
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <select class="default-select form-control wide w-80" class="form-control"
                                                id="id_produk" name="id_produk">
                                                <option selected>{{ $data->id_produk }}</option>
                                                @foreach ($prod as $prod )
                                                <option value={{ $prod->id_produk }}>{{ $prod->id_produk }} | {{ $prod->nama }} | {{ $prod->stok }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah" class="form-label">Jumlah</label>
                                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $data->jumlah }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status
                                        </label>
                                        <select class="default-select form-control wide w-100" class="form-control"
                                            id="status" name="status">
                                            <option selected>{{ $data->status }}</option>
                                            <option value="1">Aktif</option>
                                            <option value="0">Tidak Aktif</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                                        Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection