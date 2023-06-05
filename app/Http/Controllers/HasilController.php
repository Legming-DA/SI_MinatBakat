<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\aturan;
use App\Models\jurusan;
use App\Models\hasil_indikasi;// Import model yang diperlukan
use Barryvdh\DomPDF\Facade\Pdf;

class HasilController extends Controller
{
    protected $primaryKey = 'kd_hasil';

    // Metode untuk menampilkan data
    public function index()
    {
        $hasil_indikasi = hasil_indikasi::all();
        return view('hasil_indikasi.hasil_indikasi', ['hasil_indikasi' => $hasil_indikasi]);
    }

    //Metode untuk menambahkan data
    public function create()
    {
        $siswa = siswa::pluck('nama', 'nisn');
        $aturan = aturan::pluck('hasil_aturan', 'kd_aturan');
        $jurusan = jurusan::pluck('bidang_jurusan', 'kd_jurusan');
        return view('hasil_indikasi.create', compact('siswa', 'aturan', 'jurusan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kd_hasil' => 'required',
            'nisn' => 'required',
            'kd_aturan' => 'required',
            'kd_jurusan' => 'required',
            'hasil_indikasi' => 'required',
        ],[
            'kd_hasil.required' => 'Nama tidak boleh kosong!',
        ]);

        hasil_indikasi::create($validated);
        session()->flash('success', 'Data Berhasil Disimpan!');
        return redirect()->route('hasil_indikasi.index');
    }

    public function edit(hasil_indikasi $hasil_indikasi){
        $siswa = siswa::pluck('nama', 'nisn');
        $aturan = aturan::pluck('hasil_aturan', 'kd_aturan');
        $jurusan = jurusan::pluck('bidang_jurusan', 'kd_jurusan');
        return view('hasil_indikasi.edit', compact('hasil_indikasi', 'siswa', 'aturan', 'jurusan'));
    }

    // Metode untuk mengedit data
    public function update(Request $request, $kd_hasil)
    {
        $rules = [
            'kd_hasil' => 'required',
            'nisn' => 'required',
            'kd_aturan' => 'required',
            'kd_jurusan' => 'required',
            'hasil_indikasi' => 'required'
        ];

    // Validasi input
    $validated = $request->validate($rules);

    // Update data pengguna berdasarkan id pengguna
    hasil_indikasi::where('kd_hasil', $kd_hasil)->update($validated);

    return redirect('hasil_indikasi')->with('success', 'Data Berhasil Diubah!');
       
    }

    // Metode untuk menghapus data
    public function destroy($kd_hasil)
    {
        hasil_indikasi::where('kd_hasil', $kd_hasil)->delete();
        return redirect('hasil_indikasi')->with('success', 'Data Berhasil Dihapus!');
    }

    public function downloadPDF(){
        $hasil_indikasi = hasil_indikasi::all();
        $pdf = Pdf::loadView('hasil_indikasi.cetak', ['hasil_indikasi' => $hasil_indikasi])->setPaper("A4", "potrait");

        return $pdf->stream('report-data-hasil.pdf');
    }
}
