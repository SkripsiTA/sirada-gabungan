<?php

namespace App\Http\Controllers\Web\Panitia;

use App\Models\User;
use App\Models\KramaMipil;
use App\Models\PanitiaDesa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KegiatanPanitia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PanitiaDesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $panitiadesa = PanitiaDesa::with(['desaadat','kramamipil'])->paginate(10);
        $kegiatanpanitia = KegiatanPanitia::all();

        // dd($prajurubanjar);

        return view('admin.masterdata.panitia.panitia-desa', compact('panitiadesa', 'kegiatanpanitia'));
    }

    public function getkegiatan(Request $request)
    {
        dd($request->all());
    }
    public function create()
    {
        $kramamipil = KramaMipil::with(['banjaradat', 'cacahkramamipil'])->get();
        $kegiatan = KegiatanPanitia::all();

        return view('admin.masterdata.panitia.add-panitia-desa', compact('kramamipil', 'kegiatan'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $panitiadesa = new PanitiaDesa;
        $panitiadesa->desa_adat_id = Auth::user()->desa_adat_id;
        $panitiadesa->krama_mipil_id = $request->kramamipil_id;
        $panitiadesa->jabatan = $request->nama_jabatan;
        $panitiadesa->kegiatan_panitia_id = $request->panitia_kegiatan;
        $panitiadesa->status_panitia_desa_adat = $request->status_panitia;
        $panitiadesa->tanggal_mulai_menjabat = $request->masa_mulai;
        $panitiadesa->tanggal_akhir_menjabat = $request->masa_berakhir;
        $panitiadesa->save();

        $panitiadesaakun = new User;
        $panitiadesaakun->desa_adat_id = Auth::user()->desa_adat_id;
        $pendudukid = KramaMipil::with('cacahkramamipil.penduduk')->findOrFail($request->kramamipil_id);
        $panitiadesaakun->penduduk_id = $pendudukid->cacahkramamipil->penduduk->penduduk_id;
        $panitiadesaakun->email = $request->email;
        $panitiadesaakun->nomor_telepon = $request->nomor_telepon;
        $panitiadesaakun->password = Hash::make($request->password);
        $panitiadesaakun->role = 'Panitia';
        $panitiadesaakun->is_verified = 'Verified';
        $panitiadesaakun->save();

        return redirect('/panitia/desaadat')->with('success', 'Data berhasil ditambahkan!');
    }
}
