<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\jurusan;// Import model yang diperlukan
use Barryvdh\DomPDF\Facade\Pdf;

class JurusanController extends Controller
{
    protected $primaryKey = 'kd_jurusan';

    // Metode untuk menampilkan data
    public function index()
    {
        $jurusan = jurusan::all();
        return view('jurusan.jurusan', ['jurusan' => $jurusan]);
    }

    //Metode untuk menambahkan data
    public function create()
    {
        // $peranList = peran::pluck('nama_peran', 'kd_peran');
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kd_jurusan' => 'required',
            'bidang_jurusan' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
        ],[
            'kd_jurusan.required' => 'Nama tidak boleh kosong!',
        ]);

        jurusan::create($validated);
        session()->flash('success', 'Data Berhasil  Disimpan!');
        return redirect()->route('jurusan.index');
    }

    public function edit(jurusan $jurusan){
        return view('jurusan.edit', ['jurusan' => $jurusan]);
    }

    // Metode untuk mengedit data
    public function update(Request $request, $kd_jurusan)
    {
        $rules = [
            'kd_jurusan' => 'required',
            'bidang_jurusan' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required'
        ];

    // Validasi input
    $validated = $request->validate($rules);

    // Update data pengguna berdasarkan id pengguna
    jurusan::where('kd_jurusan', $kd_jurusan)->update($validated);

    return redirect('jurusan')->with('success', 'Data Berhasil Diubah!');
       
    }

    // Metode untuk menghapus data
    public function destroy($kd_jurusan)
    {
        jurusan::where('kd_jurusan', $kd_jurusan)->delete();
        return redirect('jurusan')->with('success', 'Data Berhasil Dihapus!');
    }

    public function downloadPDF(){
        $jurusan = jurusan::all();
        $pdf = Pdf::loadView('jurusan.cetak', ['jurusan' => $jurusan])->setPaper("A4", "potrait");

        return $pdf->stream('report-data-jurusan.pdf');
    }
}
