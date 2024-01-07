<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Data Transaksi</h1>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>Id Order</th>
            <th>Total Bayar</th>
            <th>Metode</th>
            <th>Status</th>
            <th>Kode Diskon</th>
            <th>Id Staff</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->order->id_order }}</td>
            <td>{{ $row->totalsetelah }}</td>
            <td>{{ $row->metode }}</td>
            <td>{{ $row->status== 1 ? 'Aktif' : 'Tidak Aktif'}}</td>
            <td>{{ $row->id_diskon }}</td>
            <td>{{ $row->id_staff }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
