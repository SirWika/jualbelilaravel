<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class shirtcontroller extends Controller

{
    public function index()
    {
        // Mendapatkan data dari tabel 'produk' menggunakan Query Builder
        $data_shirt = DB::table('produk')->get();
        
        // Menampilkan data ke view 'landing.shirt'
        return view('landing.datail', ['data_shirt' => $data_shirt]);
    }
    
}