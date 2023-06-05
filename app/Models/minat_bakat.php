<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class minat_bakat extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_minatbakat';
    protected $table = 'minat_bakat'; //Nama tabel yang akan digunakan
    
    protected $fillable = [
        'kd_minatbakat',
        'jenis_minatbakat',
        'deskripsi'
    ];
    
    // Jika tabel memiliki kolom timestamps (created_at dan updated_at)
    public $timestamps = true;

    public function aturan()
    {
        return $this->hasMany(aturan::class, 'kd_aturan');
    }
}
