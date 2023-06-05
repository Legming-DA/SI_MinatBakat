<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa; // Import model yang diperlukan
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class SiswaController extends Controller
{
    protected $primaryKey = 'nisn';
    
    // Metode untuk menampilkan data
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.siswa', ['siswa' => $siswa]);
    }

    //Metode untuk menambahkan data
    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'usia' => 'required',
            'email' => 'required',
            'no_telepon' => 'required|max:13|min:11|unique:siswa',
            'asal_sekolah' => 'required'
        ],[
            'nisn.required' => 'NISN sudah terdaftar!',
            'nama.required' => 'Nama tidak boleh kosong!',
            'no_telepon.max' => 'Nomor telepon maksimal 13!',
        ]);

        siswa::create($validated);
        session()->flash('success', 'DataBerhasil Disimpan!');
        return redirect()->route('siswa.index');
    }

    public function edit(siswa $siswa){
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    // Metode untuk mengedit data
    public function update(Request $request, $nisn)
    {
        $rules = [
            'nisn' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'usia' => 'required',
            'email' => 'required',
            'no_telepon' => 'required|max:13|min:11',
            'asal_sekolah' => 'required'
        ];

    // Validasi input
    $validated = $request->validate($rules);

    // Update data siswa berdasarkan nisn
    Siswa::where('nisn', $nisn)->update($validated);

    return redirect('siswa')->with('success', 'Data Siswa Berhasil Diubah!');
       
    } 

    // Metode untuk menghapus data
    public function destroy($nisn)
    {
        // Hapus data dari database
        siswa::where('nisn', $nisn)->delete();
        return redirect('siswa')->with('success', 'Data Siswa Berhasil Dihapus!');
    }
    
    public function downloadPDF(){
        $siswa = siswa::all();
        $pdf = Pdf::loadView('siswa.cetak', ['siswa' => $siswa])->setPaper("A4", "potrait");

        return $pdf->stream('report-data-siswa.pdf');
    }

}
