@extends('layouts.re')
@section('title', 'Staff')
@section('container')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="/tambahstaff">Tambah</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/staff">Kembali</a>
                    </li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-8 order-lg-1">
                                <h4 class="mb-3">Tambah Data Staff</h4>
                                <form class="needs-validation" novalidate="" method="POST" action="/updatedatastaff/{{ $data->id_staff }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="id_staff" class="form-label">Id Staff</label>
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" id="id_staff" name="id_staff"
                                                placeholder="Masukkan Id Staff" value="{{ $data->id_staff }}" required />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Masukkan username" value="{{ $data->username }}" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="text" class="form-control" id="password" name="password"
                                            placeholder="Masukkan password" value="{{ $data->password }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Masukkan Nama" value="{{ $data->nama }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                            placeholder="Masukkan Tanggal Lahir" value="{{ $data->tanggal_lahir }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label">Jabatan
                                        </label>
                                        <select class="default-select form-control wide w-100" class="form-control"
                                            id="jabatan" name="jabatan">
                                            <option selected>{{ $data->jabatan }}</option>
                                            <option value="karyawan">Karyawan</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenkel" class="form-label">Jenis Kelamin
                                        </label>
                                        <select class="default-select form-control wide w-100" class="form-control"
                                            id="jenkel" name="jenkel">
                                            <option selected>{{ $data->jenkel }}</option>
                                            <option value="male">Laki Laki</option>
                                            <option value="female">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Foto</label>
                                        <input type="file" class="form-control" id="foto" name="foto" value="{{ $data->foto }}" required />
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
