<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\indikator_mb;// Import model yang diperlukan

class IndikatorController extends Controller
{
    protected $primaryKey = 'kd_indikator';

    // Metode untuk menampilkan data
    public function index()
    {
        $indikator_mb = indikator_mb::all();
        return view('indikator_mb.indikator_mb', ['indikator_mb' => $indikator_mb]);
    }

    //Metode untuk menambahkan data
    public function create()
    {
        return view('indikator_mb.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kd_indikator' => 'required',
            'nama_indikator' => 'required',
            'keterangan' => 'required',
        ],[
            'kd_indikator.required' => 'kode sudah terdaftar!',
            'nama_indikator.required' => 'Nama tidak boleh kosong!',
        ]);

        indikator_mb::create($validated);
        session()->flash('success', 'Data Berhasil Disimpan!');
        return redirect()->route('indikator_mb.index');
    }

    public function edit(indikator_mb $indikator_mb){
        return view('indikator_mb.edit', ['indikator_mb' => $indikator_mb]);
    }

    // Metode untuk mengedit data
    public function update(Request $request, $kd_indikator)
    {
        $rules = [
            'kd_indikator' => 'required',
            'nama_indikator' => 'required',
            'keterangan' => 'required'
        ];

    // Validasi input
    $validated = $request->validate($rules);

    // Update data siswa berdasarkan kode indikator
    indikator_mb::where('kd_indikator', $kd_indikator)->update($validated);

    return redirect('indikator_mb')->with('success', 'Data Berhasil Diubah!');
       
    }

    // Metode untuk menghapus data
    public function destroy($kd_indikator)
    {
        indikator_mb::where('kd_indikator', $kd_indikator)->delete();
        return redirect('indikator_mb')->with('success', 'Data  Berhasil Dihapus!');
    }
}
