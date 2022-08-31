<?php


namespace App\Http\Controllers;


use App\Helper\CustomController;

class PengaduanController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('pengaduan');
    }
}
