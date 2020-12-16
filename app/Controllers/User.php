<?php namespace App\Controllers;

Use App\Models\Karyawan_model;

class User extends BaseController
{
    public function __construct()
    {
        $this->model = new Karyawan_model();
    }

    public function index()
    {
        return view('user/dashboard');
    }
    
    public function createBiodata()
    {
        return view('user/create/biodata');
    }
    public function storeBiodata()
    {
        $validation = \Config\Services::validation();

        $data = [
                "npk" => $this->request->getPost('npk'),
                "nama_lengkap" => $this->request->getPost('nama_lengkap'),
                "nama_panggilan" => $this->request->getPost('nama_panggilan'),
                "departemen" => $this->request->getPost('departemen'),
                "bagian" => $this->request->getPost('bagian'),
                "jabatan" => $this->request->getPost('jabatan'),
                "tgl_masuk" => $this->request->getPost('tgl_masuk'),
                "agama" => $this->request->getPost('agama'),
                "kewarganegaraan" => $this->request->getPost('kewarganegaraan'),
                "jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
                "tmp_lahir" => $this->request->getPost('tmp_lahir'),
                "tgl_lahir" => $this->request->getPost('tgl_lahir'),
                "status_kawin" => $this->request->getPost('status_kawin'),
                "hobi" => $this->request->getPost('hobi'),
                "tinggi_badan" => $this->request->getPost('tinggi_badan'),
                "berat_badan" => $this->request->getPost('berat_badan'),
                "ukuran_kemeja" => $this->request->getPost('ukuran_kemeja'),
                "ukuran_celana" => $this->request->getPost('ukuran_celana'),
                "ukuran_sepatu" => $this->request->getPost('ukuran_sepatu'),
                "gol_darah" => $this->request->getPost('gol_darah'),
                "alamat_asal" => $this->request->getPost('alamat_asal'),
                "domisili" => $this->request->getPost('domisili'),
                "no_hp" => $this->request->getPost('no_hp'),
                "email" => $this->request->getPost('email'),
                "sosmed" => 'FB: '.$this->request->getPost('sosmed').', IG: '.$this->request->getPost('sosmed2')
        ];

        if($validation->run($data, 'biodata') == false){
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/createBiodata'));
        }else{
            $save = $this->model->insertBiodata($data);
            if($save){
                session()->set(['npk' => $this->request->getPost('npk')]);
                return redirect()->to(base_url('user/createRiwayatPendidikan'));
            }
        }
    }

    public function createRiwayatPendidikan()
    {
        return view('user/create/riwayat-pendidikan');
    }
    public function storePendidikan()
    {
        $validation = \Config\Services::validation();

        $npk = session()->get('npk');
        $id = $this->model->getnpkKaryawan($npk);
        $idEmploye = $id['id_employe'];
        $data = [
            'id_employe'=>$idEmploye,
            'jenjang'=>$this->request->getPost('jenjang1').' || '.$this->request->getPost('jenjang2').' || '.$this->request->getPost('jenjang3'),
            'jurusan'=>$this->request->getPost('jurusan1').' || '.$this->request->getPost('jurusan2').' || '.$this->request->getPost('jurusan3'),
            'instansi'=>$this->request->getPost('instansi1').' || '.$this->request->getPost('instansi2').' || '.$this->request->getPost('instansi3'),
            'tahun_pendidikan'=>$this->request->getPost('dari1').'-'.$this->request->getPost('sampai1').' || '.
                    $this->request->getPost('dari2').'-'.$this->request->getPost('sampai2').' || '.
                    $this->request->getPost('dari3').'-'.$this->request->getPost('sampai3'),
            'nilai'=>$this->request->getPost('nilai1').' || '.$this->request->getPost('nilai2').' || '.$this->request->getPost('nilai3')
        ];

        if($validation->run($data, 'pendidikan') == false){
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/createRiwayatPendidikan'));
        }else{
            $save = $this->model->insertPendidikan($data);
            if($save){
                return redirect()->to(base_url('user/createPengalamanKerja'));
            }
        }
    }

    public function createPengalamanKerja()
    {
        return view('user/create/pengalaman-kerja');
    }
    public function storePengalaman()
    {
        $validation = \Config\Services::validation();

        $npk = session()->get('npk');
        $id = $this->model->getnpkKaryawan($npk);
        $idEmploye = $id['id_employe'];
        $data = [
            'id_employe'=>$idEmploye,
            'nama_perusahaan'=>$this->request->getPost('nama_perusahaan1').' || '.$this->request->getPost('nama_perusahaan2').' || '.$this->request->getPost('nama_perusahaan3'),
            'tahun_pengalaman'=>$this->request->getPost('dari1').'-'.$this->request->getPost('sampai1').' || '.
                    $this->request->getPost('dari2').'-'.$this->request->getPost('sampai2').' || '.
                    $this->request->getPost('dari3').'-'.$this->request->getPost('sampai3'),
            'jabatan_pengalaman'=>$this->request->getPost('jabatan1').' || '.$this->request->getPost('jabatan2').' || '.$this->request->getPost('jabatan3')
        ];

        if($validation->run($data, 'pengalaman') == false){
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/createPengalamanKerja'));
        }else{
            $save = $this->model->insertPengalaman($data);
            if($save){
                return redirect()->to(base_url('user/createPelatihan'));
            }
        }
    }

    public function createPelatihan()
    {
        return view('user/create/pelatihan');
    }
    public function storePelatihan()
    {
        $validation = \Config\Services::validation();

        $npk = session()->get('npk');
        $id = $this->model->getnpkKaryawan($npk);
        $idEmploye = $id['id_employe'];
        $data = [
            'id_employe'=>$idEmploye,
            'nama_pelatihan'=>$this->request->getPost('nama_pelatihan1').' || '.$this->request->getPost('nama_pelatihan2').' || '.$this->request->getPost('nama_pelatihan3'),
            'penyelenggara'=>$this->request->getPost('penyelenggara1').' || '.$this->request->getPost('penyelenggara2').' || '.$this->request->getPost('penyelenggara3'),
            'no_sertifikat'=>$this->request->getPost('no_sertifikat1').' || '.$this->request->getPost('no_sertifikat2').' || '.$this->request->getPost('no_sertifikat3'),
            'masa_berlaku_sertifikat'=>$this->request->getPost('masa_berlaku_sertifikat1').' || '.$this->request->getPost('masa_berlaku_sertifikat2').' || '.$this->request->getPost('masa_berlaku_sertifikat3')
        ];

        if($validation->run($data, 'pelatihan') == false){
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/createPelatihan'));
        }else{
            $save = $this->model->insertPelatihan($data);
            if($save){
                return redirect()->to(base_url('user/createKemampuanBahasa'));
            }
        }
    }

    public function createKemampuanBahasa()
    {
        return view('user/create/kemampuan-bahasa');
    }
    public function storeKemampuanBhs()
    {
        $validation = \Config\Services::validation();

        $npk = session()->get('npk');
        $id = $this->model->getnpkKaryawan($npk);
        $idEmploye = $id['id_employe'];
        $data = [
            'id_employe'=>$idEmploye,
            'bahasa'=>$this->request->getPost('bahasa1').' || '.$this->request->getPost('bahasa2').' || '.$this->request->getPost('bahasa3'),
            'pendengaran'=>$this->request->getPost('pendengaran1').' || '.$this->request->getPost('pendengaran2').' || '.$this->request->getPost('pendengaran3'),
            'membaca'=>$this->request->getPost('membaca1').' || '.$this->request->getPost('membaca2').' || '.$this->request->getPost('membaca3'),
            'lisan'=>$this->request->getPost('lisan1').' || '.$this->request->getPost('lisan2').' || '.$this->request->getPost('lisan3'),
            'tulisan'=>$this->request->getPost('tulisan1').' || '.$this->request->getPost('tulisan2').' || '.$this->request->getPost('tulisan3')
        ];

        if($validation->run($data, 'kemampuan_bhs') == false){
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/createKemampuanBahasa'));
        }else{
            $save = $this->model->insertKemampuanBhs($data);
            if($save){
                return redirect()->to(base_url('user/createSusunanKeluarga'));
            }
        }
    }
    
    public function createSusunanKeluarga()
    {
        return view('user/create/susunan-keluarga');
    }
    public function storeKeluarga()
    {
        $validation = \Config\Services::validation();

        $npk = session()->get('npk');
        $id = $this->model->getnpkKaryawan($npk);
        $idEmploye = $id['id_employe'];
        $data = [
            'id_employe'=>$idEmploye,
            'hubungan'=>$this->request->getPost('hubungan1').' || '.$this->request->getPost('hubungan2').' || '.$this->request->getPost('hubungan3').' || '.$this->request->getPost('hubungan4').' || '.$this->request->getPost('hubungan5'),
            'nama_keluarga'=>$this->request->getPost('nama_keluarga1').' || '.$this->request->getPost('nama_keluarga2').' || '.$this->request->getPost('nama_keluarga3').' || '.$this->request->getPost('nama_keluarga4').' || '.$this->request->getPost('nama_keluarga5'),
            'jk_keluarga'=>$this->request->getPost('jk_keluarga1').' || '.$this->request->getPost('jk_keluarga2').' || '.$this->request->getPost('jk_keluarga3').' || '.$this->request->getPost('jk_keluarga4').' || '.$this->request->getPost('jk_keluarga5'),
            'tmp_lahir_keluarga'=>$this->request->getPost('tmp_lahir_keluarga1').' || '.$this->request->getPost('tmp_lahir_keluarga2').' || '.$this->request->getPost('tmp_lahir_keluarga3').' || '.$this->request->getPost('tmp_lahir_keluarga4').' || '.$this->request->getPost('tmp_lahir_keluarga5'),
            'tgl_lahir_keluarga'=>$this->request->getPost('tgl_lahir_keluarga1').' || '.$this->request->getPost('tgl_lahir_keluarga2').' || '.$this->request->getPost('tgl_lahir_keluarga3').' || '.$this->request->getPost('tgl_lahir_keluarga4').' || '.$this->request->getPost('tgl_lahir_keluarga5'),
            'pendidikan_terakhir'=>$this->request->getPost('pendidikan_terakhir1').' || '.$this->request->getPost('pendidikan_terakhir2').' || '.$this->request->getPost('pendidikan_terakhir3').' || '.$this->request->getPost('pendidikan_terakhir4').' || '.$this->request->getPost('pendidikan_terakhir5'),
            'pekerjaan'=>$this->request->getPost('pekerjaan1').' || '.$this->request->getPost('pekerjaan2').' || '.$this->request->getPost('pekerjaan3').' || '.$this->request->getPost('pekerjaan4').' || '.$this->request->getPost('pekerjaan5'),
            'alamat_keluarga'=>$this->request->getPost('alamat_keluarga1').' || '.$this->request->getPost('alamat_keluarga2').' || '.$this->request->getPost('alamat_keluarga3').' || '.$this->request->getPost('alamat_keluarga4').' || '.$this->request->getPost('alamat_keluarga5'),
            'no_hp_keluarga'=>$this->request->getPost('no_hp_keluarga1').' || '.$this->request->getPost('no_hp_keluarga2').' || '.$this->request->getPost('no_hp_keluarga3').' || '.$this->request->getPost('no_hp_keluarga4').' || '.$this->request->getPost('no_hp_keluarga5'),
        ];

        if($validation->run($data, 'keluarga') == false){
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/createSusunanKeluarga'));
        }else{
            $save = $this->model->insertKeluarga($data);
            if($save){
                return redirect()->to(base_url('user/createIdentitasDiri'));
            }
        }
    }
    public function createIdentitasDiri()
    {
        return view('user/create/identitas-diri');
    }
    public function storeIdentitas()
    {
        $validation = \Config\Services::validation();

        $npk = session()->get('npk');
        $id = $this->model->getnpkKaryawan($npk);
        $idEmploye = $id['id_employe'];
        $data = [
            'id_employe'=>$idEmploye,
            'jenis_identitas'=>$this->request->getPost('jenis_identitas1').' || '.$this->request->getPost('jenis_identitas2').' || '.$this->request->getPost('jenis_identitas3'),
            'no_identitas'=>$this->request->getPost('no_identitas1').' || '.$this->request->getPost('no_identitas2').' || '.$this->request->getPost('no_identitas3'),
            'masa_berlaku_identitas'=>$this->request->getPost('masa_berlaku_identitas1').' || '.$this->request->getPost('masa_berlaku_identitas2').' || '.$this->request->getPost('masa_berlaku_identitas3')
        ];

        if($validation->run($data, 'identitas') == false){
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/createIdentitasDiri'));
        }else{
            $save = $this->model->insertIdentitas($data);
            if($save){
                return redirect()->to(base_url('user/createBiodata'));
            }
        }
    }













   


}