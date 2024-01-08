<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Detail_transaksi;
use App\Models\Produk;

class indexcontroller extends Controller

{
    public function index()
    {
        $pelanggan = Auth::guard('pelanggan')->user();
        $data_produk = Produk::all();
        // Mendapatkan data dari tabel 'produk' menggunakan Query Builder
        $data_index = DB::table('index')->get();
        
        // Menampilkan data ke view 'landing.index'
        return view('landing.index', compact('data_index', 'pelanggan','data_produk'));;
    }

}