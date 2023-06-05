<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\peran;
use App\Models\pengguna; // Import model yang diperlukan

class UserController extends Controller
{
    protected $primaryKey = 'id_pengguna';

    // Metode untuk menampilkan data
    public function index()
    {
        $pengguna = pengguna::all();
        return view('pengguna.pengguna', ['pengguna' => $pengguna]);
    }

    //Metode untuk menambahkan data
    public function create()
    {
        $peranList = peran::pluck('nama_peran', 'kd_peran');
        return view('pengguna.create', compact('peranList'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pengguna' => 'required',
            'email' => 'required',
            'password' => 'required',
            'kd_peran' => 'required',
        ], [
            'email.required' => 'Nama tidak boleh kosong!',
        ]);

        pengguna::create($validated);
        session()->flash('success', 'Data Berhasil Berhasil Disimpan!');
        return redirect()->route('pengguna.index');
    }

    public function edit(pengguna $pengguna)
    {
        $peranList = peran::pluck('nama_peran', 'kd_peran');
        return view('pengguna.edit', compact('pengguna', 'peranList'));
        // return view('pengguna.edit', ['pengguna' => $pengguna]);
    }

    // Metode untuk mengedit data
    public function update(Request $request, $id_pengguna)
    {
        $rules = [
            'id_pengguna' => 'required',
            'email' => 'required',
            'password' => 'required',
            'kd_peran' => 'required'
        ];

        // Validasi input
        $validated = $request->validate($rules);

        // Update data pengguna berdasarkan id pengguna
        pengguna::where('id_pengguna', $id_pengguna)->update($validated);

        return redirect('pengguna')->with('success', 'Data Pengguna Berhasil Diubah!');
    }

    // Metode untuk menghapus data
    public function destroy($id_pengguna)
    {
        pengguna::where('id_pengguna', $id_pengguna)->delete();
        return redirect('pengguna')->with('success', 'Data Pengguna Berhasil Dihapus!');
    }
}
