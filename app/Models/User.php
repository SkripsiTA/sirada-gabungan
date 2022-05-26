<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_sso';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'username',
        'nomor_telepon',
        'foto',
        'role',
        'penduduk_id',
        'desa_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'penduduk_id', 'penduduk_id');
    }

    public function desaadat()
    {
        return $this->belongsTo(Desaadat::class, 'desa_adat_id', 'desa_adat_id');
    }

    public function Register($data){
        DB::table('tb_sso')->insert($data);
    }

    public function KonfirmasiEmail($data, $email) {
        DB::table('tb_sso')
        ->where('email', $email)
        ->update($data);
    }

    public function ResetPassword($data, $email) {
        DB::table('tb_sso')
        ->where('email', $email)
        ->update($data);
    }

    public function EditProfile($data, $id) {
        DB::table('tb_sso')
        ->where('user_id', $id)
        ->update($data);
    }

    public function EditData($data, $id) {
        DB::table('tb_sso')
        ->where('penduduk_id', $id)
        ->update($data);
    }

    public function DeleteAkun($id) {
        DB::table('tb_sso')
        ->where('penduduk_id', $id)
        ->delete();
    }
}
