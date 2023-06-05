<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_indikasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_hasil';
    protected $table = 'hasil_indikasi'; //Nama tabel yang akan digunakan
    
    protected $fillable = [
        'kd_hasil',
        'nisn',
        'kd_aturan',
        'kd_jurusan',
        'hasil_indikasi'
    ];
    
    // Jika tabel memiliki kolom timestamps (created_at dan updated_at)
    public $timestamps = true;

    public function siswa(){
        return $this->belongsTo(siswa::class, 'nisn');
    }
    public function aturan(){
        return $this->belongsTo(aturan::class, 'kd_aturan');
    }
    public function jurusan(){
        return $this->belongsTo(jurusan::class, 'kd_jurusan');
    }
}
