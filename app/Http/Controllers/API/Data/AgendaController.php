<?php

namespace App\Http\Controllers\API\Data;
use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use App\Models\AgendaSuratMasuk;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function __construct() {
        $this->SuratKeluar = new SuratKeluar();
        $this->AgendaSuratMasuk = new AgendaSuratMasuk();
    }

    public function show_agenda_internal($id) {
        $data = AgendaSuratMasuk::select('perihal', 'tanggal_kegiatan_mulai', 'tanggal_kegiatan_berakhir', 'waktu_kegiatan_mulai', 'waktu_kegiatan_selesai')
                        ->where('desa_adat_id', $id)
                        ->whereNotNull('tanggal_kegiatan_mulai')
                        ->whereNotNull('tanggal_kegiatan_berakhir')
                        ->whereNotNull('tanggal_kegiatan_mulai')
                        ->whereNotNull('waktu_kegiatan_mulai')
                        ->whereNotNull('waktu_kegiatan_selesai')
                        ->get();
        return response()->json($data, 200);
    }
}
