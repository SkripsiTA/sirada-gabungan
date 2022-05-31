<?php

namespace App\Http\Controllers\API\Data;
use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use App\Models\AgendaSuratMasuk;
use App\Models\AgendaSuratKeluar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function __construct() {
        $this->SuratKeluar = new SuratKeluar();
        $this->AgendaSuratMasuk = new AgendaSuratMasuk();
    }

    public function show_agenda_internal($id) {
        $data = AgendaSuratKeluar::select('parindikan', 'tanggal_kegiatan_mulai', 'tanggal_kegiatan_berakhir', 'waktu_kegiatan_mulai', 'waktu_kegiatan_selesai')
                        ->where('desa_adat_id', $id)
                        ->whereNotNull('tanggal_kegiatan_mulai')
                        ->whereNotNull('tanggal_kegiatan_berakhir')
                        ->whereNotNull('tanggal_kegiatan_mulai')
                        ->whereNotNull('waktu_kegiatan_mulai')
                        ->whereNotNull('waktu_kegiatan_selesai')
                        ->get();
        $data_cek = AgendaSuratKeluar::select('parindikan', 'tanggal_kegiatan_mulai', 'tanggal_kegiatan_berakhir', 'waktu_kegiatan_mulai', 'waktu_kegiatan_selesai')
                        ->where('desa_adat_id', $id)
                        ->whereNotNull('tanggal_kegiatan_mulai')
                        ->whereNotNull('tanggal_kegiatan_berakhir')
                        ->whereNotNull('tanggal_kegiatan_mulai')
                        ->whereNotNull('waktu_kegiatan_mulai')
                        ->whereNotNull('waktu_kegiatan_selesai')
                        ->first();
        if($data_cek == null) {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Agenda Acara tidak ditemukan!'
            ], 501);
        }else {
            return response()->json($data, 200);
        }
    }

    public function show_agenda_undangan($id) {
        $data = AgendaSuratMasuk::select('perihal', 'tanggal_kegiatan_mulai', 'tanggal_kegiatan_berakhir', 'waktu_kegiatan_mulai', 'waktu_kegiatan_selesai')
                                ->where('desa_adat_id', $id)
                                ->whereNotNull('tanggal_kegiatan_mulai')
                                ->whereNotNull('tanggal_kegiatan_berakhir')
                                ->whereNotNull('waktu_kegiatan_mulai')
                                ->whereNotNull('waktu_kegiatan_selesai')
                                ->get();
        $data_cek = AgendaSuratMasuk::select('perihal', 'tanggal_kegiatan_mulai', 'tanggal_kegiatan_berakhir', 'waktu_kegiatan_mulai', 'waktu_kegiatan_selesai')
                                ->where('desa_adat_id', $id)
                                ->whereNotNull('tanggal_kegiatan_mulai')
                                ->whereNotNull('tanggal_kegiatan_berakhir')
                                ->whereNotNull('waktu_kegiatan_mulai')
                                ->whereNotNull('waktu_kegiatan_selesai')
                                ->first();
        if($data_cek == null) {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Agenda Acara tidak ditemukan!'
            ], 501);
        }else {
            return response()->json($data, 200);
        }
    }
}
