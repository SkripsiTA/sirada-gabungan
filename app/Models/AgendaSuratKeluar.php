<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use DateTimeInterface;

class AgendaSuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'tb_surat_keluar';

    protected $dates = ['tanggal_kegiatan_mulai', 'tanggal_kegiatan_berakhir'];

    protected function serializeDate(DateTimeInterface $date){
        return $date->format('Y-m-d');
    }
}
