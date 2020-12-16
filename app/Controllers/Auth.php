<?php namespace App\Controllers;

use App\Models\Auth_model;

class Auth extends BaseController
{
    protected $helper = [];

    public function __construct()
    {
        helper(['form']);
        $this->auth_model = new Auth_model;
    }
    public function index()
    {
        return view('auth/login');
    }
    public function proses_login()
    {
        $validation = \Config\Services::validation();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'username' => $username,
            'password' => $password
        ];

        if($validation->run($data, 'authlogin') == false){
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('auth'));
        }else{
            $cek_login = $this->auth_model->cek_login($username);

            if($cek_login == true){
                if(password_verify($password, $cek_login['password'])){

                    session()->set('username', $cek_login['username']);
                    session()->set('role', $cek_login['role']);
                    session()->set('role_id', $cek_login['role_id']);

                    if($cek_login['role_id'] == 1){
                        return redirect()->to(base_url('admin/index'));
                    }else{
                        return redirect()->to(base_url('user/index'));
                    }

                }else{
                    session()->setFlashdata('errors', ['' => 'Password salah']);
                    return redirect()->to(base_url('auth'));
                }
            }else{
                session()->setFlashdata('errors', ['' =>'Username belum terdaftar']);
                return redirect()->to(base_url('auth'));
            }
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('auth'));
    }


}