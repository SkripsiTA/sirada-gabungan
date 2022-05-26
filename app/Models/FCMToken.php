<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FCMToken extends Model
{
    use HasFactory;

    protected $table = 'tb_token_fcm';

    protected $fillable = [
        'token_id',
        'user_id',
        'token'
    ];

    public function InsertToken($data) {
        DB::table('tb_token_fcm')->insert($data);
    }

    public function RemoveToken($token) {
        DB::table('tb_token_fcm')->where('token', $token)->delete();
    }
}
