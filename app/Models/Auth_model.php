<?php namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{
    protected $table = 'users';

    public function cek_login($username)
    {
        $query = $this->table('users')->where('username', $username)->countAll();

        if($query > 0){
            $hasil = $this->table('users')->join('user_role', 'user_role.id = role_id')->where('username', $username)->limit(1)->get()->getRowArray();
        }else{
            $hasil = [];
        }
        return $hasil;
    }
    public function menuAccess()
    {
        
    }


}