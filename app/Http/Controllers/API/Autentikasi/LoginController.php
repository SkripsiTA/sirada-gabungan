<?php

namespace App\Http\Controllers\API\Autentikasi;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PrajuruBanjarAdat;
use App\Models\PrajuruDesaAdat;
use App\Models\FCMToken;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function __construct() {
        $this->User = new User();
        $this->PrajuruBanjarAdat = new PrajuruBanjarAdat();
        $this->PrajuruDesaAdat = new PrajuruDesaAdat();
        $this->FCMToken = new FCMToken();
    }

    public function login(){
        Request()->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]
        );
        $password = User::select('password')->where('email', Request()->email)->first();
        $data_pengguna = User::select()
                                ->join('tb_m_desa_adat', 'tb_m_desa_adat.desa_adat_id', '=', 'tb_sso.desa_adat_id')
                                ->where('email', Request()->email)
                                ->first();
        $password_decode = json_decode($password);
        if($password != ""){
            if(Hash::check(Request()->password, $password_decode->password)) {
                return response()->json($data_pengguna, 200);
            } else {
                return response()->json([
                    'status' => 'Failed',
                    'message' => 'Password salah'
                ], 500) ;
            }
        } else {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Email salah'
            ], 500);
        }
    }

    public function cek_status_admin($id) {
        $data = DB::table('tb_prajuru_desa_adat')
                ->join('tb_krama_mipil', 'tb_prajuru_desa_adat.krama_mipil_id', '=', 'tb_krama_mipil.krama_mipil_id')
                ->join('tb_cacah_krama_mipil', 'tb_krama_mipil.cacah_krama_mipil_id', '=', 'tb_cacah_krama_mipil.cacah_krama_mipil_id')
                ->join('tb_penduduk', 'tb_cacah_krama_mipil.penduduk_id', '=', 'tb_penduduk.penduduk_id')
                ->where('tb_penduduk.penduduk_id', $id)
                ->first();
        return response()->json($data, 200);            
    }

    public function insert_fcm_token() {
        Request()->validate([
            'user_id' => 'required',
            'token' => 'required'
        ]);
        $cek_data = FCMToken::where('user_id', Request()->user_id)
                            ->where('token', Request()->token)
                            ->first();
        $data = [
            'user_id' => Request()->user_id,
            'token' => Request()->token
        ];
        if($cek_data == null) {
            $this->FCMToken->InsertToken($data);
            return response()->json([
                'status' => 'OK',
                'message' => 'Tambah Token FCM Berhasil!'
            ], 200);
        }else{
            return response()->json([
                'status' => 'OK',
                'message' => 'Token FCM Sudah Terdaftar!'
            ], 200);
        }
    }

    public function remove_fcm_token() {
        Request()->validate([
            'token' => 'required'
        ]);
        $this->FCMToken->RemoveToken(Request()->token);
        return response()->json([
            'status' => 'OK',
            'message' => 'Hapus Token Berhasil!'
        ], 200);
    }
}
