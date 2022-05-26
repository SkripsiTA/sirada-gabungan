<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\User;
use App\Models\DesaAdat;

class UploadFileController extends Controller
{
    public function __construct() {
        $this->User = new User();
        $this->DesaAdat = new DesaAdat();
    }

    public function save_profile_picture(Request $request) {
        $user = new User;
        if($request->hasFile('image')) {
            $user_id = $request->user_id;
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_extension = $file->getClientOriginalExtension();
            $file->move('assets/img/profile', $file_name);
            $data = [
                'foto' => $file_name
            ];
            $this->User->EditProfile($data, $user_id);
            return response()->json([
                'status' => 'OK',
                'message' => 'Foto Profile berhasil diunggah!'
            ], 200);
        }else {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Berkas Foto Profil belum terpilih!'
            ], 500);
        }
    }

    public function save_logo_desa(Request $request) {
        $desa = new DesaAdat;
        if($request->hasFile('image')) {
            $desa_id = $request->desa_id;
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_extension = $file->getClientOriginalExtension();
            $file->move('assets/img/logo-desa', $file_name);
            $data = [
                'desadat_logo' => $file_name
            ];
            $this->DesaAdat->UpSejarahDesaAdat($desa_id, $data);
            return response()->json([
                'status' => 'OK',
                'message' => 'Logo Desa Berhasil Diunggah!'
            ], 200);
        }else {
            return response()->json([
                'status' => 'Failed',
                'message' => 'File Logo Desa belum dipilih!'
            ], 501);
        }
    }

    public function save_struktur_desa(Request $request) {
        if($request->hasFile('image')) {
            $desa_id = $request->desa_id;
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_extension = $file->getClientOriginalExtension();
            $file->move('assets/img/struktur-desa', $file_name);
            $data = [
                'desadat_file_struktur_pem' => $file_name
            ];
            $this->DesaAdat->UpSejarahDesaAdat($desa_id, $data);
            return response()->json([
                'status' => 'OK',
                'message' => 'Logo Desa Berhasil Diunggah!'
            ], 200);
        }else {
            return response()->json([
                'status' => 'Failed',
                'message' => 'File Logo Desa belum dipilih!'
            ], 501);
        }
    }
}
