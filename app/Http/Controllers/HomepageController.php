<?php


namespace App\Http\Controllers;


use App\Helper\CustomController;

class HomepageController extends CustomController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('kontak');
    }
}
