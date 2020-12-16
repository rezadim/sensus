<?php namespace App\Models;

use CodeIgniter\Model;

class Karyawan_model extends Model
{
    protected $table = 'biodata';

    public function getKaryawan($id = false)
    {
        if($id === false){
            return $this->table('biodata')->orderBy('id_employe', 'DESC')->get()->getResultArray();
        }else{
            return $this->table('biodata')->where('id_employe', $id)->get()->getROwArray();
        }
    }
    public function getnpkKaryawan($npk)
    {
        return $this->table($this->table)->where('npk', $npk)->get()->getRowArray();
    }

    public function insertBiodata($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function insertPendidikan($data)
    {
        return $this->db->table('pendidikan')->insert($data);
    }
    public function insertPengalaman($data)
    {
        return $this->db->table('pengalaman_kerja')->insert($data);
    }
    public function insertPelatihan($data)
    {
        return $this->db->table('pelatihan')->insert($data);
    }
    public function insertKemampuanBhs($data)
    {
        return $this->db->table('kemampuan_bahasa')->insert($data);
    }
    public function insertKeluarga($data)
    {
        return $this->db->table('susunan_keluarga')->insert($data);
    }
    public function insertIdentitas($data)
    {
        return $this->db->table('identitas_diri')->insert($data);
    }
    
    public function deleteKaryawan($id)
    {
        return $this->db->table($this->table)->delete(['id_employe' => $id]);
    }

    public function report()
    {
        return $this->table('biodata')
                    ->join('pendidikan', 'pendidikan.id_employe = biodata.id_employe', 'left')
                    ->join('pengalaman_kerja', 'pengalaman_kerja.id_employe = biodata.id_employe', 'left')
                    ->join('pelatihan', 'pelatihan.id_employe = biodata.id_employe', 'left')
                    ->join('kemampuan_bahasa', 'kemampuan_bahasa.id_employe = biodata.id_employe', 'left')
                    ->join('susunan_keluarga', 'susunan_keluarga.id_employe = biodata.id_employe', 'left')
                    ->join('identitas_diri', 'identitas_diri.id_employe = biodata.id_employe', 'left')
                    ->get()->getResultArray();
    }

}