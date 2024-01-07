@extends('layouts.table')
@section('title','ORDER')
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
            <a href="/order">Order</a>
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
              <h4 class="card-title">Data Order</h4>
              <form method="POST" action="tambahorder.php">
                <a class="btn btn-primary tombol-tambah btn-xs" type="button"
                href="/tambahorder">Tambah Data Order</a>
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id User</th>
                      <th>Nama Pelanggan</th>
                      <th>Id Produk</th>
                      <th>Nama Produk</th>
                      <th>Status</th>
                      <th>Jumlah</th>
                      <th>Total Harga</th>
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
                        <td>{{ $row->id_user }}</td>
                        <td>{{ $row->pelanggan->nama }}</td>
                        <td>{{ $row->id_produk }}</td>
                        <td>{{ $row->produk->nama }}</td>
                        <td>{{ $row->status== 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                        <td>{{ $row->jumlah }}</td>
                        <td>{{ $row->totalharga }}</td>
                        <td>
                            <a role="button" class="btn btn-info btn-xxs" href="/editdataorder/{{ $row->id_order }}">UBAH</a>
                            <a role="button" class="btn btn-danger btn-xxs" href="/deletedataorder/{{ $row->id_order }}">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id User</th>
                        <th>Nama Pelanggan</th>
                        <th>Id Produk</th>
                        <th>Nama Produk</th>
                        <th>Status</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
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
