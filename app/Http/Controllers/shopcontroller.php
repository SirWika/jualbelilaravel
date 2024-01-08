<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class shopcontroller extends Controller

{
    public function index()
    {
        // Mendapatkan data dari tabel 'produk' menggunakan Query Builder
        try {
            $data_shop = DB::table('shop')->get();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        
        
        // Menampilkan data ke view 'landing.shop'
        return view('landing.shop', ['data_shop' => $data_shop]);
    }
}