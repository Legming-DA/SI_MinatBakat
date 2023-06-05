<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indikator_mb extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_indikator';
    protected $table = 'indikator_mb'; // Nama tabel yang akan digunakan
    
    protected $fillable = [
        'kd_indikator',
        'nama_indikator',
        'keterangan'
    ];
    
    // Jika tabel memiliki kolom timestamps (created_at dan updated_at)
    public $timestamps = true;

    public function aturan()
    {
        return $this->hasMany(aturan::class, 'kd_aturan');
    }
}
