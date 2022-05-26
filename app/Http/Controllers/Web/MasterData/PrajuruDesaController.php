<?php

namespace App\Http\Controllers\Web\MasterData;

use App\Http\Controllers\Controller;
use App\Models\KramaMipil;
use Illuminate\Http\Request;
use App\Models\PrajuruDesaAdat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\User;

class PrajuruDesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $prajurudesa = PrajuruDesaAdat::with(['desaadat','kramamipil'])->where('desa_adat_id', Auth::user()->desa_adat_id)->paginate(10);

        return view('admin.masterdata.pegawai.prajuru-desa', compact('prajurudesa'));
    }

    public function create()
    {
        $prajurudesa = PrajuruDesaAdat::first();
        $kramamipil = KramaMipil::with(['banjaradat', 'cacahkramamipil'])->get();
        $akun = User::with(['penduduk','desaadat'])->first();

        return view('admin.masterdata.pegawai.add-prajuru-desa', compact('prajurudesa','kramamipil', 'akun'));
    }

    public function getpassword(Request $request)
    {
        $kramamipil_id = $request->kramamipil_id;

        $nik = KramaMipil::with(['banjaradat', 'cacahkramamipil'])->where('krama_mipil_id',$kramamipil_id)->get();
        $pass = $nik->cacahkramamipil->penduduk->nik;
        $encrypt = Hash::make($pass);

        return response()->json($encrypt);

    }

    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'file_sk' => 'required|mimes:jpeg,jpg,pdf|max:3072',
        ]);

        $file_sk = $request->file('file_sk');
        $filesk = time().'.'.$file_sk->getClientOriginalExtension();
        $file_sk->move('assets/img/SK/', $filesk);

        // dd($filesk);

        $prajurudesa = new PrajuruDesaAdat;
        $prajurudesa->desa_adat_id = Auth::user()->desa_adat_id;
        $prajurudesa->krama_mipil_id = $request->kramamipil_id;
        $prajurudesa->jabatan = $request->nama_jabatan;
        $prajurudesa->status_prajuru_desa_adat = $request->status_prajuru_desa;
        $prajurudesa->tanggal_mulai_menjabat = $request->masa_mulai;
        $prajurudesa->tanggal_akhir_menjabat = $request->masa_berakhir;
        $prajurudesa->sk_prajuru = $filesk;
        $prajurudesa->save();

        // dd($prajurudesaakun);
        $prajurudesaakun = new User;
        $prajurudesaakun->desa_adat_id = Auth::user()->desa_adat_id;
        $pendudukid = KramaMipil::with('cacahkramamipil.penduduk')->findOrFail($request->kramamipil_id);
        $prajurudesaakun->penduduk_id = $pendudukid->cacahkramamipil->penduduk->penduduk_id;
        $prajurudesaakun->email = $request->email;
        $prajurudesaakun->nomor_telepon = $request->nomor_telepon;
        $prajurudesaakun->password = Hash::make($request->password);
        $prajurudesaakun->role = $request->role_prajuru;
        $prajurudesaakun->is_verified = 'Verified';
        $prajurudesaakun->save();

        return redirect('/prajuru/desaadat')->with('success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $editprajurudesa = PrajuruDesaAdat::with(['desaadat','kramamipil'])->findOrFail($id);

        return view('admin.masterdata.pegawai.edit-prajuru-desa', compact('editprajurudesa'));
    }

    public function update(Request $request, $id)
    {
        $updateprajurudesa = PrajuruDesaAdat::with(['desaadat','kramamipil'])->findOrFail($id);

        if($request->hasFile('file_sk')) {
            $this->validate($request, [
                'file_sk' => 'required|mimes:jpeg,jpg,pdf|max:3072',
            ]);

            $file_sk = $request->file('file_sk');
            $filesk = time().'.'.$file_sk->getClientOriginalExtension();
            $file_sk->move('assets/img/SK/', $filesk);
            File::delete('assets/img/SK/'. $updateprajurudesa->sk_prajuru);

            $updateprajurudesa->desa_adat_id = Auth::user()->desa_adat_id;
            $updateprajurudesa->krama_mipil_id = $request->kramamipil_id;
            $updateprajurudesa->jabatan = $request->nama_jabatan;
            $updateprajurudesa->status_prajuru_desa_adat = $request->status_prajuru_desa;
            $updateprajurudesa->tanggal_mulai_menjabat = $request->masa_mulai;
            $updateprajurudesa->tanggal_akhir_menjabat = $request->masa_berakhir;
            $updateprajurudesa->sk_prajuru = $filesk;
        } else {
            $updateprajurudesa->desa_adat_id = Auth::user()->desa_adat_id;
            $updateprajurudesa->krama_mipil_id = $request->kramamipil_id;
            $updateprajurudesa->jabatan = $request->nama_jabatan;
            $updateprajurudesa->status_prajuru_desa_adat = $request->status_prajuru_desa;
            $updateprajurudesa->tanggal_mulai_menjabat = $request->masa_mulai;
            $updateprajurudesa->tanggal_akhir_menjabat = $request->masa_berakhir;
        }

        $updateprajurudesa->save();

        $updateprajurudesaakun = User::findOrFail($updateprajurudesa->kramamipil->cacahkramamipil->penduduk->user[0]->user_id);
        // dd($updateprajurudesa);
        $updateprajurudesaakun->desa_adat_id = Auth::user()->desa_adat_id;
        $pendudukid = KramaMipil::with('cacahkramamipil.penduduk')->findOrFail($request->kramamipil_id);
        $updateprajurudesaakun->penduduk_id = $pendudukid->cacahkramamipil->penduduk->penduduk_id;
        $updateprajurudesaakun->email = $request->email;
        $updateprajurudesaakun->nomor_telepon = $request->nomor_telepon;
        $updateprajurudesaakun->role = $request->role_prajuru;
        $updateprajurudesaakun->save();

        // return dd([$updateprajurudesa, $updateprajurudesaakun]);
        return redirect('/prajuru/desaadat')->with('success', 'Data berhasil diupdate!');
    }

    public function nonaktif(Request $request, $id)
    {
        $updateprajurudesa = PrajuruDesaAdat::with(['desaadat','kramamipil'])->findOrFail($id);
        $updateprajurudesa->status_prajuru_desa_adat = 'tidak aktif';
        $updateprajurudesa->save();
        // dd($updateprajurudesa);

        return redirect('/prajuru/desaadat')->with('success', 'Data berhasil dinonaktifkan!');
    }

    public function aktif(Request $request, $id)
    {
        $updateprajurudesa = PrajuruDesaAdat::with(['desaadat','kramamipil'])->findOrFail($id);
        $updateprajurudesa->status_prajuru_desa_adat = 'aktif';
        $updateprajurudesa->save();
        // dd($updateprajurudesa);

        return redirect('/prajuru/desaadat')->with('success', 'Data berhasil diaktifkan!');
    }

    public function detail($id)
    {
        $detailprajurudesa = PrajuruDesaAdat::with(['desaadat','kramamipil'])->findOrFail($id);

        return view('admin.masterdata.pegawai.detail-prajuru-desa', compact('detailprajurudesa'));
    }
    public function destroy($id)
    {
        // $prajurudesa = PrajuruDesaAdat::findOrFail($id);
        // $prajurudesa->delete();
        // $delete = PrajuruDesaAdat::with('kramamipil.cacahkramamipil.penduduk.user')->where('prajuru_desa_adat_id', $id)->delete();
        // User::delete($id);
        // dd($delete);
        return redirect('/prajuru/desaadat')->with('success', 'Data berhasil dihapus!');
    }
}
