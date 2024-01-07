<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Staff;
use App\Models\Diskon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Detail_transaksi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;

class DetailController extends Controller
{
    public function index()
    {
        $data = Detail_transaksi::with(['order', 'diskon', 'staff'])->get();
        return view('detail-transaksi.detail-transaksi', compact('data'));
    }
    public function tampildata($id_transaksi)
    {
        $data = Detail_transaksi::find($id_transaksi);
        return view('detail-transaksi.editdetail-transaksi', compact('data'));
    }

    public function updatedata(Request $request, $id_transaksi)
    {
        $data = Detail_transaksi::find($id_transaksi);

        if (!$data) {
            return redirect()->back()->with('error', 'Detail Transaksi tidak ditemukan.');
        }

        $data->metode = $request->metode;
        $data->status = $request->status;
        $data->id_diskon = $request->id_diskon ?? null;

        $datad = null;
        if ($data->id_diskon) {
            $datad = Diskon::find($data->id_diskon);
            if (!$datad) {
                return redirect()->back()->with('error', 'Diskon tidak ditemukan.');
            }
        }

        $diskonMatch = ($datad->status == 1 && $datad->jumlah != 0) && ($data->id_diskon == $datad->id_diskon);
        if ($diskonMatch) {
            if ($data->status == 0) {
                $oldharga = $data->totalsetelah;
                $hargabaru = ($oldharga - $datad->harga);
                $data->totalsetelah = $hargabaru;
                $data->save();
                if ($datad->jumlah == 0) {
                    $datad->status = 0;
                    $datad->save();
                }
            } else {
                $data->totalsetelah;
                $data->save();
                $datad->jumlah;
                $datad->jumlah -= 1;
                if ($datad->jumlah == 0) {
                    $datad->status = 0;
                    $datad->save();
                }
                $datad->save();
            }
        } else {
            return redirect()->back()->with('error', 'Diskon Habis');
        }

        return redirect()->route('detail-transaksi')->with('success', 'Detail Transaksi berhasil diperbarui.');
    }


    public function deletedata($id_transaksi)
    {
        $data = Detail_transaksi::find($id_transaksi);
        $data->delete();

        return redirect()->route('detail-transaksi')->with('success', 'Data Berhasil Dihapus');
    }

    public function cetaktransaksi()
    {
        $data = Detail_transaksi::with(['order', 'diskon', 'staff'])
            ->where('status', 1)
            ->get();

        view()->share('data', $data);
        $pdf = Pdf::loadView('detail-transaksi.cetaktransaksi');

        return $pdf->download('detailtransaksi.pdf');
    }
}
