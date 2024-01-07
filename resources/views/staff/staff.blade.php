@extends('layouts.table')
@section('title','STAFF')
@section('container')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert" id="success-alert">
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
            <a href="/staff">Staff</a>
          </li>
          <li class="breadcrumb-item">
            <a href="/">Dashboard</a>
          </li>
        </ol>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Data Staff</h4>
              <form method="POST" action="tambahpelanggan.php">
                <a class="btn btn-primary tombol-tambah btn-xs" type="button"
                href="/tambahstaff">Tambah Data Staff</a>
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id Staff</th>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>Jabatan</th>
                      <th>Gender</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->id_staff }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$row->foto) }}" alt="" width="80" height="80">
                        </td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->tanggal_lahir }}</td>
                        <td>{{ $row->jabatan }}</td>
                        <td>{{ $row->jenkel }}</td>
                        <td>
                            <a role="button" class="btn btn-info btn-xxs" href="/editdatastaff/{{ $row->id_staff }}">UBAH</a>
                            <a role="button" class="btn btn-danger btn-xxs" href="/deletedatastaff/{{ $row->id_staff }}">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id Staff</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jabatan</th>
                        <th>Gender</th>
                        <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection()
