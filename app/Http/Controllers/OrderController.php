<?php

namespace App\Http\Controllers;

use App\Models\Detail_transaksi;
use App\Models\Order;
use App\Models\Produk;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $data = Order::with(['pelanggan', 'produk'])->get();
        return view('order.order', compact('data'));
    }
    public function tambahorder()
    {
        $pell = Pelanggan::all();
        $prod = Produk::all();
        return view('order.tambahorder', compact('pell', 'prod'));
    }

    // public function insertorder(Request $request)
    // {
    //     $produk = Produk::find($request->id_produk);

    //     if (!$produk) {
    //         return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    //     }

    //     $totalharga = $request->jumlah * $produk->harga;

    //     // Buat order baru
    //     Order::create([
    //         'id_user' => $request->id_user,
    //         'id_produk' => $request->id_produk,
    //         'jumlah' => $request->jumlah,
    //         'totalharga' => $totalharga,
    //     ]);

    //     return redirect()->route('order')->with('success', 'Data Berhasil Ditambahkan');
    // }
    public function insertorder(Request $request)
    {
        // Mencari produk berdasarkan ID
        $produk = Produk::find($request->id_produk);

        // Cek apakah produk ditemukan
        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }

        // Menghitung total harga
        $totalharga = $request->jumlah * $produk->harga;

        // Buat order baru dengan foto dari produk
        Order::create([
            'id_user' => $request->id_user,
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
            'totalharga' => $totalharga,
            'foto' => $produk->foto, // Menambahkan foto dari produk
        ]);

        // Redirect ke halaman order dengan pesan sukses
        return redirect()->route('order')->with('success', 'Data Berhasil Ditambahkan');
    }


    public function tampildata($id_order)
    {
        $data = Order::find($id_order);
        $pell = Pelanggan::all();
        $prod = Produk::all();
        return view('order.editorder', compact('data', 'pell', 'prod'));
    }

    public function updatedata(Request $request, $id_order)
    {
        $data = Order::find($id_order);
        if (!$data) {
            return redirect()->back()->with('error', 'Order tidak ditemukan.');
        }

        $produk = Produk::find($data->id_produk);
        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }

        $oldStatus = $data->status;
        $totalharga = $request->jumlah * $produk->harga;
        $data->update(array_merge($request->all(), ['totalharga' => $totalharga]));

        if ($request->status == 1 && $oldStatus != 1) {
            if ($produk->stok >= $request->jumlah) {
                $produk->stok -= $request->jumlah;
                $produk->save();
                $detailTransaksi = new Detail_transaksi();
                $detailTransaksi->id_order = $id_order;
                $detailTransaksi->totalsetelah = $totalharga;
                $detailTransaksi->metode = 'CASH';
                $detailTransaksi->status = false;
                $detailTransaksi->id_staff = Auth::guard('staff')->id();
                $detailTransaksi->id_diskon = $request->id_diskon ?? null;
                $detailTransaksi->save();
            } else {
                return redirect()->back()->with('error', 'Stok tidak cukup.');
            }
        }

        return redirect()->route('order')->with('success', 'Data Berhasil Diedit');
    }



    public function deletedata($id_order)
    {
        $data = Order::find($id_order);
        $data->delete();

        return redirect()->route('order')->with('success', 'Data Berhasil Dihapus');
    }
}
