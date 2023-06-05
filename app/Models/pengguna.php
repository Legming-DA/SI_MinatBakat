<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pengguna';
    protected $table = 'pengguna'; // Nama tabel yang akan digunakan
    
    protected $fillable = [
        'id_pengguna',
        'email',
        'password',
        'kd_peran'
    ];
    
    // Jika tabel memiliki kolom timestamps (created_at dan updated_at)
    public $timestamps = true;

    public function peran(){
        return $this->belongsTo(peran::class, 'kd_peran');
    }
}
