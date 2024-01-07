@extends('layouts.re')
@section('title', 'PELANGGAN')
@section('container')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="/editpelanggan/{{ $data->id_pelanggan }}">Edit</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/pelanggan">Kembali</a>
                    </li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-8 order-lg-1">
                                <h4 class="mb-3">Edit Data Pelanggan</h4>
                                <form class="needs-validation" novalidate="" method="POST" action="/updatedatapelanggan/{{ $data->id_user }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="id_user" class="form-label">Id User</label>
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" id="id_user" name="id_user"
                                                placeholder="Masukkan Id User" value="{{ $data->id_user }}" required />
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
                                        <label for="telp" class="form-label">Telephone</label>
                                        <input type="text" class="form-control" id="telp" name="telp"
                                            placeholder="Masukkan Telephone" value="{{ $data->telp }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            placeholder="Masukkan Alamat" value="{{ $data->alamat }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                            placeholder="Masukkan Tanggal Lahir" value="{{ $data->tanggal_lahir }}"
                                            required />
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
