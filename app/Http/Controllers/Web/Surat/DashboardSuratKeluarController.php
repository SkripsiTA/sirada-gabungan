<?php

namespace App\Http\Controllers\Web\Surat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSuratKeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.suratkeluar.dashboard-surat-keluar');
    }
}
