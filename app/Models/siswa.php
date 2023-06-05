<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'nisn';
    protected $table = 'siswa'; // Nama tabel yang akan digunakan
    
    protected $fillable = [
        'nisn',
        'nama',
        'jenis_kelamin',
        'usia',
        'email',
        'no_telepon',
        'asal_sekolah'
    ];
    
    // Jika tabel memiliki kolom timestamps (created_at dan updated_at)
    public $timestamps = true;
}
