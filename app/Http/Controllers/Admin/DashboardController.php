<?php


namespace App\Http\Controllers\Admin;


use App\Helper\CustomController;
use App\Models\Pengaduan;

class DashboardController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $menunggu = Pengaduan::where('status', '=', 0)->count();
        $terima = Pengaduan::where('status', '=', 1)->count();
        $tolak = Pengaduan::where('status', '=', 6)->count();
        $data = Pengaduan::where('status', '=', 0)->get();
        return view('admin.dashboard')->with([
            'menunggu' => $menunggu,
            'terima' => $terima,
            'tolak' => $tolak,
            'data' => $data
        ]);
    }
}
