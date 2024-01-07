@extends('layouts.table')
@section('title','TRANSAKSI')
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
            <a href="/detail-transaksi">Detail Transaksi</a>
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
              <h4 class="card-title">Data Detail transaksi</h4>
              <form>
                <a class="btn btn-primary tombol-tambah btn-xs" href="/cetaktransaksi">CETAK TRANSAKSI</a>
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id Order</th>
                      <th>Total Harga</th>
                      <th>Total Dibayar</th>
                      <th>Metode</th>
                      <th>Status</th>
                      <th>Id Diskon</th>
                      <th>Id Staff</th>
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
                        <td>{{ $row->order->id_order }}</td>
                        <td>{{ $row->order->totalharga }}</td>
                        <td>{{ $row->totalsetelah }}</td>
                        <td>{{ $row->metode }}</td>
                        <td>{{ $row->status== 1 ? 'Aktif' : 'Tidak Aktif'}}</td>
                        <td>{{ $row->id_diskon }}</td>
                        <td>{{ $row->id_staff }}</td>
                        <td>
                            <a role="button" class="btn btn-info btn-xxs" href="/editdatadetail/{{ $row->id_transaksi }}">UBAH</a>
                            <a role="button" class="btn btn-danger btn-xxs" href="/deletedatadetail/{{ $row->id_transaksi }}">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id Order</th>
                        <th>Total Dibayar</th>
                        <th>Metode</th>
                        <th>Status</th>
                        <th>Id Diskon</th>
                        <th>Id Staff</th>
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
