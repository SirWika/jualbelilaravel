<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Detail_transaksi;
use App\Models\Produk;

class DashboardController extends Controller
{
    public function index()
    {
        $staff = Auth::guard('staff')->user();
        $data = Detail_transaksi::with(['order', 'diskon', 'staff'])->get();

        return view('dashboard.index', compact('data', 'staff'));
    }
}
