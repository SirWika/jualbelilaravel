<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order1;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Mencari produk berdasarkan ID
        $produk = order1::find($request->id_produk);

        // Cek apakah produk ditemukan
        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }

        // Menghitung total harga
        $totalharga = $request->jumlah * $produk->harga;

        // Buat order baru dengan foto dari produk
        Order1::create([
            'id_user' => $request->id_user,
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
            'totalharga' => $totalharga,
            'foto' => $produk->foto, // Menambahkan foto dari produk
        ]);

        // Redirect ke halaman order dengan pesan sukses
        return redirect()->route('order')->with('success', 'Data Berhasil Ditambahkan');
}
}