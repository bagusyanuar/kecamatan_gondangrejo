<?php


namespace App\Http\Controllers\Admin;


use App\Helper\CustomController;

class AuthController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest');
    }

    public function login()
    {
        if($this->request->method() === 'POST') {
            $credentials = [
                'username' => $this->postField('username'),
                'password' => $this->postField('password')
            ];
            if ($this->isAuth($credentials)) {
                return redirect('/admin');
            }
            return redirect()->back()->with('failed', 'Periksa Kembali Username dan Password Anda');
        }
        return view('admin.login');
    }
}
