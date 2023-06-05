<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peran extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_peran';
    protected $table = 'peran'; // Nama tabel yang akan digunakan

    protected $fillable = [
        'kd_peran',
        'nama_peran'
    ];

    // Jika tabel memiliki kolom timestamps (created_at dan updated_at)
    public $timestamps = true;

    public function pengguna()
    {
        return $this->hasMany(pengguna::class, 'kd_peran');
    }
}
