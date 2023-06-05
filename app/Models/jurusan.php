<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_jurusan';
    protected $table = 'jurusan'; //Nama tabel yang akan digunakan
    
    protected $fillable = [
        'kd_jurusan',
        'bidang_jurusan',
        'deskripsi',
        'persyaratan'
    ];
    
    // Jika tabel memiliki kolom timestamps (created_at dan updated_at)
    public $timestamps = true;

    public function hasil_indikasi()
    {
        return $this->hasMany(hasil_indikasi::class, 'kd_hasil');
    }
}
