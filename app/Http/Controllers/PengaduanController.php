<?php


namespace App\Http\Controllers;


use App\Helper\CustomController;
use App\Models\Pengaduan;
use Carbon\Carbon;

class PengaduanController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = Pengaduan::where('status', '=', 1)->orderBy('id', 'DESC')->get();
        return view('pengaduan')->with(['data' => $data]);
    }

    public function store()
    {
        try {
            $data = [
                'tanggal' => Carbon::now(),
                'nama' => $this->postField('nama'),
                'no_hp' => $this->postField('no_hp'),
                'pengaduan' => $this->postField('pengaduan'),
            ];
            Pengaduan::create($data);
            return redirect()->back()->with('success', 'Berhasil Membuat Pengaduan...');
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', 'Terjadi Kesalahan Server...');
        }
    }
}
