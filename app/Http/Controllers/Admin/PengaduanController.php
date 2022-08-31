<?php


namespace App\Http\Controllers\Admin;


use App\Helper\CustomController;
use App\Models\Pengaduan;

class PengaduanController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function waiting()
    {
        $data = Pengaduan::where('status', '=', 0)
            ->get();
        return view('admin.pengaduan.menunggu.index')->with(['data' => $data]);
    }

    public function detail_waiting($id)
    {
        $data = Pengaduan::findOrFail($id);
        if ($this->request->method() === 'POST') {
            try {
                $request = [
                    'status' => $this->postField('status'),
                    'tanggapan' => (int)$this->postField('status') === 1 ? $this->postField('tanggapan') : '-'
                ];
                $data->update($request);
                return redirect('/admin/pengaduan/menunggu')->with('success', 'Berhasil Memberi Tanggapan...');
            } catch (\Exception $e) {
                return redirect()->back()->with('failed', 'Terjadi kesalahan server...');
            }

        }
        return view('admin.pengaduan.menunggu.detail')->with(['data' => $data]);
    }

    public function accepted()
    {
        $data = Pengaduan::where('status', '=', 1)
            ->get();
        return view('admin.pengaduan.terima.index')->with(['data' => $data]);
    }

    public function denied()
    {
        $data = Pengaduan::where('status', '=', 6)
            ->get();
        return view('admin.pengaduan.tolak.index')->with(['data' => $data]);
    }
}
