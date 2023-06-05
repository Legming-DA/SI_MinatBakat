<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\peran;// Import model yang diperlukan

class RoleController extends Controller
{
    protected $primaryKey = 'kd_peran';

    // Metode untuk menampilkan data
    public function index()
    {
        $peran = peran::all();
        return view('peran.peran', ['peran' => $peran]);
    }

    //Metode untuk menambahkan data
    public function create()
    {
        return view('peran.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kd_peran' => 'required',
            'nama_peran' => 'required',
        ],[
            'kd_peran.required' => 'Kode sudah terdaftar!',
            'nama_peran.required' => 'Nama tidak boleh kosong!',
        ]);

        peran::create($validated);
        session()->flash('success', 'Data Peran Berhasil Disimpan!');
        return redirect()->route('peran.index');
    }

    public function edit(peran $peran){
        return view('peran.edit', ['peran' => $peran]);
    }

    // Metode untuk mengedit data
    public function update(Request $request, $kd_peran)
    {
        $rules = [
            'kd_peran' => 'required',
            'nama_peran' => 'required'
        ];

    // Validasi input
    $validated = $request->validate($rules);

    // Update data siswa berdasarkan kode indikator
    peran::where('kd_peran', $kd_peran)->update($validated);

    return redirect('peran')->with('success', 'Data Peran Berhasil Diubah!');
       
    }

    // Metode untuk menghapus data
    public function destroy($kd_peran)
    {
        peran::where('kd_peran', $kd_peran)->delete();
        return redirect('peran')->with('success', 'Data Peran Berhasil Dihapus!');
    }
}
