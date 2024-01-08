<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class shirtcontroller extends Controller
{
    public function index()
    {
        // Mendapatkan data dari tabel 'produk' menggunakan Query Builder
        $data_shirt = DB::table('produks')->get();
        
        // Menampilkan data ke view 'landing.shirt'
        return view('landing.shirt', ['data_shirt' => $data_shirt]);
    }

    public function anotherPage()
    {
        // Mendapatkan data lain atau melakukan operasi lain sesuai kebutuhan
        $data_another = DB::table('produks')->get();

        // Menampilkan data ke view 'landing.another_page'
        return view('landing.detail', ['data_another' => $data_another]);
    }
    
    public function anotherPage1()
    {
        // Mendapatkan data lain atau melakukan operasi lain sesuai kebutuhan
        $data_another1 = DB::table('produks')->get();

        // Menampilkan data ke view 'landing.another_page'
        return view('landing.detail1', ['data_another1' => $data_another1]);
    }
    public function anotherPage2()
    {
        // Mendapatkan data lain atau melakukan operasi lain sesuai kebutuhan
        $data_another2 = DB::table('produks')->get();

        // Menampilkan data ke view 'landing.another_page'
        return view('landing.detail2', ['data_another1' => $data_another2]);
    }
    public function anotherPage3()
    {
        // Mendapatkan data lain atau melakukan operasi lain sesuai kebutuhan
        $data_another3 = DB::table('produks')->get();

        // Menampilkan data ke view 'landing.another_page'
        return view('landing.detail3', ['data_another3' => $data_another3]);
    }
    public function anotherPage4()
    {
        // Mendapatkan data lain atau melakukan operasi lain sesuai kebutuhan
        $data_another4 = DB::table('produks')->get();

        // Menampilkan data ke view 'landing.another_page'
        return view('landing.detail4', ['data_another4' => $data_another4]);
    }
    public function anotherPage5()
    {
        // Mendapatkan data lain atau melakukan operasi lain sesuai kebutuhan
        $data_another5 = DB::table('produks')->get();

        // Menampilkan data ke view 'landing.another_page'
        return view('landing.detail5', ['data_another5' => $data_another5]);
    }
    public function anotherPage6()
    {
        // Mendapatkan data lain atau melakukan operasi lain sesuai kebutuhan
        $data_another6 = DB::table('produks')->get();

        // Menampilkan data ke view 'landing.another_page'
        return view('landing.detail6', ['data_another6' => $data_another6]);
    }
    public function anotherPage7()
    {
        // Mendapatkan data lain atau melakukan operasi lain sesuai kebutuhan
        $data_another7 = DB::table('produks')->get();

        // Menampilkan data ke view 'landing.another_page'
        return view('landing.detail7', ['data_another7' => $data_another7]);
    }
    
}
