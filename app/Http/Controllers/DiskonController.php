<?php

namespace App\Http\Controllers;

use App\Models\Diskon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DiskonController extends Controller
{
    public function index()
    {
        $data = Diskon::all();
        return view('diskon.diskon', compact('data'));
    }

    public function tambahdiskon()
    {
        return view('diskon.tambahdiskon');
    }

    public function insertdiskon(Request $request)
    {
        Diskon::create($request->all());
        return redirect()->route('diskon')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function tampildata($id_diskon)
    {
        $data = Diskon::find($id_diskon);
        return view('diskon.editdiskon', compact('data'));
    }

    public function updatedata(Request $request,$id_diskon)
    {
        $data = Diskon::find($id_diskon);
        $data->update($request->all());

        return redirect()->route('diskon')->with('success','Data Berhasil Diedit');
    }
    public function deletedata($id_diskon)
    {
        $data = Diskon::find($id_diskon);
        $data->delete();

        return redirect()->route('diskon')->with('success','Data Berhasil Dihapus');
    }
}
