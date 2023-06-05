<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aturan extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_aturan';
    protected $table = 'aturan'; //Nama tabel yang akan digunakan
    
    protected $fillable = [
        'kd_aturan',
        'kd_indikator',
        'kd_minatbakat',
        'hasil_aturan'
    ];
    
    // Jika tabel memiliki kolom timestamps (created_at dan updated_at)
    public $timestamps = true;

    public function indikator_mb(){
        return $this->belongsTo(indikator_mb::class, 'kd_indikator');
    }

    public function minat_bakat(){
        return $this->belongsTo(minat_bakat::class, 'kd_minatbakat');
    }
}
