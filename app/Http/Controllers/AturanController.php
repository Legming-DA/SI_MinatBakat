<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\aturan;
use App\Models\indikator_mb;
use App\Models\minat_bakat;// Import model yang diperlukan
use Barryvdh\DomPDF\Facade\Pdf;

class AturanController extends Controller
{
    protected $primaryKey = 'kd_aturan';

    // Metode untuk menampilkan data
    public function index()
    {
        $aturan = aturan::all();
        return view('aturan.aturan', ['aturan' => $aturan]);
    }

    //Metode untuk menambahkan data
    public function create()
    {
        $indikatorList = indikator_mb::pluck('nama_indikator', 'kd_indikator');
        $minatbakatList = minat_bakat::pluck('jenis_minatbakat', 'kd_minatbakat');
        return view('aturan.create', compact('indikatorList', 'minatbakatList'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kd_aturan' => 'required',
            'kd_indikator' => 'required',
            'kd_minatbakat' => 'required',
            'hasil_aturan' => 'required',
        ],[
            'kd_aturan.required' => 'Nama tidak boleh kosong!',
        ]);

        aturan::create($validated);
        session()->flash('success', 'Data Berhasil Disimpan!');
        return redirect()->route('aturan.index');
    }

    public function edit(aturan $aturan){

        // $peranList = peran::pluck('nama_peran', 'kd_peran');
        // return view('pengguna.edit', compact('pengguna', 'peranList'));
        $indikatorList = indikator_mb::pluck('nama_indikator', 'kd_indikator');
        $minatbakatList = minat_bakat::pluck('jenis_minatbakat', 'kd_minatbakat');
        return view('aturan.edit', compact('aturan', 'indikatorList', 'minatbakatList'));
    }

    // Metode untuk mengedit data
    public function update(Request $request, $kd_aturan)
    {
        $rules = [
            'kd_aturan' => 'required',
            'kd_indikator' => 'required',
            'kd_minatbakat' => 'required',
            'hasil_aturan' => 'required'
        ];

    // Validasi input
    $validated = $request->validate($rules);

    // Update data pengguna berdasarkan id pengguna
    aturan::where('kd_aturan', $kd_aturan)->update($validated);

    return redirect('aturan')->with('success', 'Data Berhasil Diubah!');
       
    }

    // Metode untuk menghapus data
    public function destroy($kd_aturan)
    {
        aturan::where('kd_aturan', $kd_aturan)->delete();
        return redirect('aturan')->with('success', 'Data Berhasil Dihapus!');
    }

    public function downloadPDF(){
        $aturan = aturan::all();
        $pdf = Pdf::loadView('aturan.cetak', ['aturan' => $aturan])->setPaper("A4", "potrait");

        return $pdf->stream('report-data-aturan.pdf');
    }
}
