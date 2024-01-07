<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('produk.produk', compact('data'));
    }
    public function tambahproduk()
    {
        return view('produk.tambahproduk');
    }
    public function insertproduk(Request $request)
    {
        $validatedData = $request->validate([
            'id_produk' => 'required|integer',
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'stok' => 'required|integer',
            'harga' => 'required|numeric|between:0,99999999.99',
            'foto' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $path = 'fotoproduk/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($foto));

            $validatedData['foto'] = $path;
        }

        Produk::create($validatedData);

        return redirect()->route('produk')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampildata($id_produk)
    {
        $data = Produk::find($id_produk);
        return view('produk.editproduk', compact('data'));
    }

    public function updatedata(Request $request, $id_produk)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'stok' => 'required|integer',
            'harga' => 'required|numeric|between:0,99999999.99',
            'foto' => 'sometimes|mimes:jpeg,png,jpg,gif|max:2048', // use 'sometimes' for optional fields
        ]);

        $produk = Produk::findOrFail($id_produk);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $path = 'fotoproduk/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($foto));
            $validatedData['foto'] = $path;
        } else {
            unset($validatedData['foto']);
        }

        $produk->update($validatedData);

        return redirect()->route('produk')->with('success', 'Data Berhasil Diperbarui');
    }


    public function deletedata($id_produk)
    {
        $data = Produk::find($id_produk);
        $data->delete();

        return redirect()->route('produk')->with('success', 'Data Berhasil Dihapus');
    }
}
