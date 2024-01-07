@extends('layouts.re')
@section('title', 'DISKON')
@section('container')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="/editdiskon">Edit</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/diskon">Kembali</a>
                    </li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-8 order-lg-1">
                                <h4 class="mb-3">Tambah Data Diskon</h4>
                                <form class="needs-validation" novalidate="" method="POST" action="/updatedatadiskon/{{ $data->id_diskon }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="id_diskon" class="form-label">Kode Diskon</label>
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" id="id_diskon" name="id_diskon"
                                                placeholder="Masukkan Kode Diskon" value="{{ $data->id_diskon }}" required />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                            placeholder="Masukkan Deskripsi" value="{{ $data->deskripsi }}" required />
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

                                    <div class="mb-3">
                                        <label for="jumlah" class="form-label">Jumlah</label>
                                        <input type="text" class="form-control" id="jumlah" name="jumlah"
                                            placeholder="Masukkan jumlah diskon" value="{{ $data->jumlah }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="text" class="form-control" id="harga" name="harga"
                                            placeholder="Masukkan harga diskon" value="{{ $data->harga }}" required />
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
