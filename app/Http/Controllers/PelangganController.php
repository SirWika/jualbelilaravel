<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request; // Correct namespace for Request
use Illuminate\Routing\Controller;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();
        return view('pelanggan.pelanggan', compact('data'));
    }

    public function tambahpelanggan()
    {
        return view('pelanggan.tambahpelanggan');
    }

    public function insertpelanggan(Request $request)
    {
        Pelanggan::create($request->all());
        return redirect()->route('pelanggan')->with('success','Data Berhasil Ditambahkan');
    }

    public function tampildata($id_user)
    {
        $data = Pelanggan::find($id_user);
        return view('pelanggan.editpelanggan', compact('data'));
    }

    public function updatedata(Request $request,$id_user)
    {
        $data = Pelanggan::find($id_user);
        $data->update($request->all());

        return redirect()->route('pelanggan')->with('success','Data Berhasil Diedit');
    }
    public function deletedata($id_user)
    {
        $data = Pelanggan::find($id_user);
        $data->delete();

        return redirect()->route('pelanggan')->with('success','Data Berhasil Dihapus');
    }
}
