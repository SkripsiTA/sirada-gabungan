<?php

namespace App\Http\Controllers\Web\MasterData;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BanjarAdat;
use App\Models\KramaMipil;
use Illuminate\Http\Request;
use App\Models\PrajuruBanjarAdat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class PrajuruBanjarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $prajurubanjar = PrajuruBanjarAdat::with(['banjaradat','kramamipil'])->paginate(10);

        // dd($prajurubanjar);

        return view('admin.masterdata.banjar.prajuru-banjar', compact('prajurubanjar'));
    }

    public function create()
    {
        // $prajurubanjar = PrajuruBanjarAdat::with(['banjaradat', 'kramamipil'])->get();
        // dd($prajurubanjar);
        $banjaradat = BanjarAdat::with('desaadat')->where('desa_adat_id', Auth::user()->desa_adat_id)->get();
        // dd($banjaradat);
        $kramamipil = KramaMipil::with(['banjaradat', 'cacahkramamipil'])->get();
        $akun = User::with(['penduduk','desaadat'])->first();

        return view('admin.masterdata.banjar.add-prajuru-banjar', compact('banjaradat', 'kramamipil', 'akun'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file_sk' => 'required|mimes:jpeg,jpg,pdf|max:3072',
        ]);

        $file_sk = $request->file('file_sk');
        $filesk = time().'.'.$file_sk->getClientOriginalExtension();
        $file_sk->move('assets/img/SK/', $filesk);
        // dd($request->all());
        $prajurubanjar = new PrajuruBanjarAdat;
        $prajurubanjar->banjar_adat_id = $request->banjar_adat;
        $prajurubanjar->krama_mipil_id = $request->kramamipil_id;
        $prajurubanjar->jabatan = $request->nama_jabatan;
        $prajurubanjar->status_prajuru_banjar_adat = $request->status_prajuru_banjar;
        $prajurubanjar->tanggal_mulai_menjabat = $request->masa_mulai;
        $prajurubanjar->tanggal_akhir_menjabat = $request->masa_berakhir;
        $prajurubanjar->sk_prajuru_banjar = $filesk;
        $prajurubanjar->save();


        // dd($prajurudesaakun);
        $prajurubanjarakun = new User;
        $prajurubanjarakun->desa_adat_id = Auth::user()->desa_adat_id;
        $pendudukid = KramaMipil::with('cacahkramamipil.penduduk')->findOrFail($request->kramamipil_id);
        $prajurubanjarakun->penduduk_id = $pendudukid->cacahkramamipil->penduduk->penduduk_id;
        $prajurubanjarakun->email = $request->email;
        $prajurubanjarakun->nomor_telepon = $request->nomor_telepon;
        $prajurubanjarakun->password = Hash::make($request->password);
        $prajurubanjarakun->role = 'Krama';
        $prajurubanjarakun->is_verified = 'Verified';
        $prajurubanjarakun->save();

        return redirect()->route('prajuru-banjar-adat')->with('success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $editprajurubanjar = PrajuruBanjarAdat::with(['banjaradat','kramamipil'])->findOrFail($id);
        // dd($editprajurubanjar->banjaradat);
        $banjaradat = BanjarAdat::with('desaadat')->where('desa_adat_id', Auth::user()->desa_adat_id)->get();

        return view('admin.masterdata.banjar.edit-prajuru-banjar', compact('editprajurubanjar', 'banjaradat'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $updateprajurubanjar = PrajuruBanjarAdat::with(['banjaradat','kramamipil'])->findOrFail($id);

        if($request->hasFile('file_sk')) {
            $this->validate($request, [
                'file_sk' => 'required|mimes:jpeg,jpg,pdf|max:3072',
            ]);

            $file_sk = $request->file('file_sk');
            $filesk = time().'.'.$file_sk->getClientOriginalExtension();
            $file_sk->move('assets/img/SK/', $filesk);
            File::delete('assets/img/SK/'. $updateprajurubanjar->sk_prajuru_banjar);

            $updateprajurubanjar->banjar_adat_id = $request->banjar_adat;
            $updateprajurubanjar->krama_mipil_id = $request->kramamipil_id;
            $updateprajurubanjar->jabatan = $request->nama_jabatan;
            $updateprajurubanjar->status_prajuru_banjar_adat = $request->status_prajuru_banjar;
            $updateprajurubanjar->tanggal_mulai_menjabat = $request->masa_mulai;
            $updateprajurubanjar->tanggal_akhir_menjabat = $request->masa_berakhir;
            $updateprajurubanjar->sk_prajuru_banjar = $filesk;
        } else {
            $updateprajurubanjar->banjar_adat_id = $request->banjar_adat;
            $updateprajurubanjar->krama_mipil_id = $request->kramamipil_id;
            $updateprajurubanjar->jabatan = $request->nama_jabatan;
            $updateprajurubanjar->status_prajuru_banjar_adat = $request->status_prajuru_banjar;
            $updateprajurubanjar->tanggal_mulai_menjabat = $request->masa_mulai;
            $updateprajurubanjar->tanggal_akhir_menjabat = $request->masa_berakhir;
        }
        $updateprajurubanjar->save();
        // dd($updateprajurubanjar);

        $updateprajurubanjarakun = User::findOrFail($updateprajurubanjar->kramamipil->cacahkramamipil->penduduk->user[0]->user_id);
        $updateprajurubanjarakun->desa_adat_id = Auth::user()->desa_adat_id;
        $pendudukid = KramaMipil::with('cacahkramamipil.penduduk')->findOrFail($request->kramamipil_id);
        $updateprajurubanjarakun->penduduk_id = $pendudukid->cacahkramamipil->penduduk->penduduk_id;
        $updateprajurubanjarakun->email = $request->email;
        $updateprajurubanjarakun->save();
        // dd($updateprajurubanjarakun);

        return redirect()->route('prajuru-banjar-adat')->with('success', 'Data berhasil diupdate!');
    }

    public function nonaktif(Request $request, $id)
    {
        $updateprajurubanjar = PrajuruBanjarAdat::with(['banjaradat','kramamipil'])->findOrFail($id);
        $updateprajurubanjar->status_prajuru_banjar_adat = 'tidak aktif';
        $updateprajurubanjar->save();
        // dd($updateprajurudesa);

        return redirect()->route('prajuru-banjar-adat')->with('success', 'Data berhasil dinonaktifkan!');
    }

    public function aktif(Request $request, $id)
    {
        $updateprajurubanjar = PrajuruBanjarAdat::with(['banjaradat','kramamipil'])->findOrFail($id);
        $updateprajurubanjar->status_prajuru_banjar_adat = 'aktif';
        $updateprajurubanjar->save();
        // dd($updateprajurudesa);

        return redirect()->route('prajuru-banjar-adat')->with('success', 'Data berhasil diaktifkan!');
    }

    public function detail($id)
    {
        $detailprajurubanjar = PrajuruBanjarAdat::with(['banjaradat','kramamipil'])->findOrFail($id);

        return view('admin.masterdata.banjar.detail-prajuru-banjar', compact('detailprajurubanjar'));
    }

    public function destroy($id)
    {
        //
    }
}
