<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\minat_bakat;// Import model yang diperlukan
use Barryvdh\DomPDF\Facade\Pdf;

class MinatBakatController extends Controller
{
    protected $primaryKey = 'kd_minatbakat';

    // Metode untuk menampilkan data
    public function index()
    {
        $minat_bakat = minat_bakat::all();
        return view('minat_bakat.minat_bakat', ['minat_bakat' => $minat_bakat]);
    }

    //Metode untuk menambahkan data
    public function create()
    {
        // $peranList = peran::pluck('nama_peran', 'kd_peran');
        return view('minat_bakat.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kd_minatbakat' => 'required',
            'jenis_minatbakat' => 'required',
            'deskripsi' => 'required',
        ],[
            'kd_minatbakat.required' => 'Nama tidak boleh kosong!',
        ]);

        minat_bakat::create($validated);
        session()->flash('success', 'Data Berhasil  Disimpan!');
        return redirect()->route('minat_bakat.index');
    }

    public function edit(minat_bakat $minat_bakat){
        return view('minat_bakat.edit', ['minat_bakat' => $minat_bakat]);
    }

    // Metode untuk mengedit data
    public function update(Request $request, $kd_minatbakat)
    {
        $rules = [
            'kd_minatbakat' => 'required',
            'jenis_minatbakat' => 'required',
            'deskripsi' => 'required'
        ];

    // Validasi input
    $validated = $request->validate($rules);

    // Update data pengguna berdasarkan id pengguna
    minat_bakat::where('kd_minatbakat', $kd_minatbakat)->update($validated);

    return redirect('minat_bakat')->with('success', 'Data Berhasil Diubah!');
       
    }

    // Metode untuk menghapus data
    public function destroy($kd_minatbakat)
    {
        minat_bakat::where('kd_minatbakat', $kd_minatbakat)->delete();
        return redirect('minat_bakat')->with('success', 'Data Berhasil Dihapus!');
    }

    public function downloadPDF(){
        $minat_bakat = minat_bakat::all();
        $pdf = Pdf::loadView('minat_bakat.cetak', ['minat_bakat' => $minat_bakat])->setPaper("A4", "potrait");

        return $pdf->stream('report-data-minat-bakat.pdf');
    }
}
