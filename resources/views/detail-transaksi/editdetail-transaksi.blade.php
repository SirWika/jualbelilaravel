@extends('layouts.re')
@section('title', 'DETAIL-TRANSAKSI')
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
                        <a href="/updatedatadetail/{{ $data->id_transaksi }}">Edit</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/detail-transaksi">Kembali</a>
                    </li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-8 order-lg-1">
                                <h4 class="mb-3">Edit data Detail Transaksi</h4>
                                <form class="needs-validation" novalidate="" method="POST" action="/updatedatadetail/{{ $data->id_transaksi }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="metode" class="form-label">Metode
                                        </label>
                                        <select class="default-select form-control wide w-100" class="form-control"
                                            id="metode" name="metode">
                                            <option selected>{{ $data->metode }}</option>
                                            <option value="CASH">Cash</option>
                                            <option value="ATM">ATM</option>
                                            <option value="DEBIT">Debit</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status
                                        </label>
                                        <select class="default-select form-control wide w-100" class="form-control"
                                            id="status" name="status">
                                            <option selected>{{ $data->status== 1 ? 'Aktif' : 'Tidak Aktif'}}</option>
                                            <option value="1">Aktif</option>
                                            <option value="0">Tidak Aktif</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_diskon" class="form-label">Kode Diskon</label>
                                        <input type="text" class="form-control" id="id_diskon" name="id_diskon" value="{{ $data->id_diskon }}" required />
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
