<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function index()
    {
        $data = Staff::all();
        return view('staff.staff', compact('data'));
    }

    public function tambahstaff()
    {
        return view('staff.tambahstaff');
    }

    public function insertstaff(Request $request)
    {
        $validatedData = $request->validate([
            'id_staff' => 'required',
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jabatan' => 'required',
            'jenkel' => 'required',
            'foto' => 'required|image|max:2048', // Example validation for image
        ]);

        $foto = $validatedData['foto'];
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        $path = 'fotokustaff/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($foto));

        $validatedData['foto'] = $path;
        $validatedData['password'] = bcrypt($validatedData['password']);

        Staff::create($validatedData);

        return redirect()->route('staff')->with('success', 'Data Berhasil Ditambahkan');
    }




    public function tampildata($id_staff)
    {
        $data = Staff::find($id_staff);
        return view('staff.editstaff', compact('data'));
    }

    // public function updatedata(Request $request,$id_staff)
    // {
    //     $validatedData = $request->validate([
    //         'id_staff' => 'required',
    //         'username' => 'required',
    //         'password' => 'required',
    //         'nama' => 'required',
    //         'tanggal_lahir' => 'required|date',
    //         'jabatan' => 'required',
    //         'jenkel' => 'required',
    //         'foto' => 'sometimes|image|max:2048', // Example validation for image
    //     ]);

    //     $staff = Staff::findOrFail($id_staff);
    //     if($request->hasFile('foto')){
    //         $foto = $validatedData['foto'];
    //         $filename = time() . '.' . $foto->getClientOriginalExtension();
    //         $path = 'fotokustaff/' . $filename;

    //         Storage::disk('public')->put($path, file_get_contents($foto));

    //         $validatedData['foto'] = $path;
    //         $validatedData['password'] = bcrypt($validatedData['password']);
    //     }else {
    //         unset($validatedData['foto']);
    //     }
    //     $staff->update($validatedData);

    //     return redirect()->route('staff')->with('success', 'Data Berhasil Diperbarui');
    // }

    public function updatedata(Request $request, $id_staff)
{
    $validatedData = $request->validate([
        'id_staff' => 'required',
        'username' => 'required',
        'password' => 'required', // Hanya dibutuhkan password jika selalu ingin mengubahnya
        'nama' => 'required',
        'tanggal_lahir' => 'required|date',
        'jabatan' => 'required',
        'jenkel' => 'required',
        'foto' => 'sometimes|image|max:2048', // Validasi untuk gambar
    ]);

    $staff = Staff::findOrFail($id_staff);

    // Hash password jika diberikan
    if (!empty($validatedData['password'])) {
        $validatedData['password'] = bcrypt($validatedData['password']);
    } else {
        unset($validatedData['password']);
    }

    if ($request->hasFile('foto')) {
        $foto = $validatedData['foto'];
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        $path = 'fotokustaff/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($foto));

        $validatedData['foto'] = $path;
    } else {
        unset($validatedData['foto']);
    }

    $staff->update($validatedData);

    return redirect()->route('staff')->with('success', 'Data Berhasil Diperbarui');
}


    public function deletedata($id_staff)
    {
        $data = Staff::find($id_staff);
        $data->delete();

        return redirect()->route('staff')->with('success','Data Berhasil Dihapus');
    }
}
