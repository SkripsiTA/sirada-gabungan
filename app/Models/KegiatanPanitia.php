<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanPanitia extends Model
{
    use HasFactory;

    protected $table = 'tb_kegiatan_panitia';
    protected $primaryKey = 'kegiatan_panitia_id';

    protected $fillable = [
        'panitia',
    ];

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class);
    }
}
