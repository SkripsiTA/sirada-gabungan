<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FCMService;
use App\Models\FCMToken;

class NotificationController extends Controller
{
    public function __construct() {
        $this->FCMToken = new FCMToken();
    }

    public function send_notification() {
        $firebaseToken = FCMToken::select('token')->first();
        $SERVER_API_KEY = 'AAAA2LYDTzc:APA91bF0R6twnBYo5o2r8nCELbkIEh0bf8dGfXCQ9HPT-hPOzbw4mQ-A9SW7gC1Xx6kfgfbYx6aaxrSTpeN_X3421ACnX_QTFVWoY5KMSx9CseN3YSQ5ZRXUUhn_sh8xh-n4N9D5-giC';
        $token_decode = json_decode($firebaseToken);
        $data = [
            "registration_ids" => [
                $token_decode->token
            ],
            "notification" => [
                "title" => "Pengumuman Baru",
                "body" => "Desa Peguyangan Kaja baru saja mengeluarkan pengumuman. Cek SiRada untuk informasi lebih lanjut",  
            ]
        ];

        $dataString = json_encode($data);
    
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        $response = curl_exec($ch);
  
        dd($response);
        return response()->json($response, 200);
    }
}
