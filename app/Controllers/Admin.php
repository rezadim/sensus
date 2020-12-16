<?php namespace App\Controllers;

use App\Models\Karyawan_model;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->model = new Karyawan_model();
    }
    public function index()
    {
        $data['karyawan'] = $this->model->getKaryawan();

        return view('admin/dashboard', $data);
    }
    public function dataKaryawan()
    {
        $paginate = 5;
        $data['karyawan'] = $this->model->paginate($paginate, 'karyawan');
        $data['pager'] = $this->model->pager;

        return view('admin/data-karyawan', $data);
    }
    public function deleteKaryawan($id)
    {
        $delete = $this->model->deleteKAryawan($id);

        if($delete){
            return redirect()->to(base_url('admin/dataKaryawan'));
        }
    }
    public function report()
    {
        return view('admin/report');
    }
    public function reportExcel()
    {
            $spreadsheet = new Spreadsheet();
			$sheet = $spreadsheet->getActiveSheet();
            
            //header excel
			$abjadShared = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ','BA','BB','BC','BD','BE','BF','BG','BH','BI','BJ','BK','BL','BM','BN','BO','BP','BQ','BR','BS','BT','BU','BV','BW','BX','BY','BZ','CA','CB','CC','CD','CE','CF','CG','CH','CI','CJ','CK','CL','CM','CN','CO','CP','CQ','CR','CS','CT','CU','CV','CW','CX','CY','CZ','DA','DB','DC','DD','DE','DF','DG','DH','DI','DJ','DK','DL','DM','DN','DO','DP','DQ','DR', 'DS', 'DT', 'DU', 'DV', 'DW', 'DX', 'DY', 'DZ'];
            $dataHeader = ['NPK','Nama Lengkap','Nama Panggilan','Departemen', 'Bagian', 'Jabatan','Tanggal Masuk','Agama','Kewarganegaraan','Jenis Kelamin','Tempat Lahir','Tanggal Lahir','Status Perkawinan','Hobby','Gol. Darah', 'Tinggi Badan','Berat Badan' ,'Ukuran Kemeja','Ukuran Celana','Ukuran Sepatu','Alamat Asal',  'Domisili', 'No HP','Email','Sosial Media','Jenjang1','Jurusan1','Institusi1','Tahun1','Nilai1','Jenjang2','Jurusan2','Institusi2','Tahun2','Nilai2','Jenjang3','Jurusan3','Institusi3','Tahun3','Nilai3','Nama Perusahaan 1','Tahun 1','Jabatan 1','Nama Perusahaan 2','Tahun 2','Jabatan 2','Nama Perusahaan 3','Tahun 3','Jabatan 3','Nama Pelatihan 1','Penyelenggara 1','No Sertifikat 1','Masa Berlaku Sertifikat 1','Nama Pelatihan 2','Penyelenggara 2','No Sertifikat 2','Masa Berlaku Sertifikat 2','Nama Pelatihan 3','Penyelenggara 3','No Sertifikat 3','Masa Berlaku Sertifikat 3','Bahasa 1','Pendengaran 1','Membaca 1','Lisan 1','Tulisan 1','Bahasa 2','Pendengaran 2','Membaca 2','Lisan 2','Tulisan 2','Bahasa 3','Pendengaran 3','Membaca 3','Lisan 3','Tulisan 3','Nama Ayah','Kelamin 1','Tempat Lahir1','Tanggal Lahir 1','Pendidikan 1','Pekerjaan 1','Alamat 1','No HP 1','Nama Ibu','Kelamin 2','Tempat Lahir2','Tanggal Lahir 2','Pendidikan 2','Pekerjaan 2','Alamat 2','No HP 2','Nama Saudara Kandung','Kelamin 3','Tempat Lahir3','Tanggal Lahir 3','Pendidikan 3','Pekerjaan 3','Alamat 3','No HP 3','Nama Suami/Istri','Kelamin 4','Tempat Lahir4','Tanggal Lahir 4','Pendidikan 4','Pekerjaan 4','Alamat 4','No HP 4','Nama Anak','Kelamin 5','Tempat Lahir5','Tanggal Lahir 5','Pendidikan 5','Pekerjaan 5','Alamat 5','No HP 5','Identitas 1','Nomor 1','Masa Berlaku 1','Identitas 2','Nomor 2','Masa Berlaku 2','Identitas 3','Nomor 3','Masa Berlaku 3'];

            //cells merge excel
            $abjadMergeCells1 = ['A1','AG1','AV1','BE1','BQ1','CF1','DO1'];
            $abjadMergeCells2 = ['AF1','AU1','BD1','BP1','CE1','DN1','DZ1'];
			$dataMergeCells = ['Biodata Pribadi','Riwayat Pendidikan','Pengalaman Kerja','Pelatihan/Sertifikasi/Training','Kemampuan Bahasa','Susunan Keluarga','Identitas Diri'];
            
            //count for per data
			$countdataMergeCells = count($dataMergeCells);
            $countabjadShared = count($dataHeader);
        
            //style cells excel
			$styleArray = [
                'font' => ['bold' => true ],
                'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
            ];

            //merge cells
            for($b=0; $b<$countdataMergeCells; $b++)
            {
				$sheet->mergeCells($abjadMergeCells1[$b] .':'. $abjadMergeCells2[$b]);
				$sheet->setCellValue($abjadMergeCells1[$b], $dataMergeCells[$b]);
				$sheet->getStyle($abjadMergeCells1[$b])->applyFromArray($styleArray);
			}
            
            //abjad header
			$y=1;
			$z=2;
			for($b=0; $b<$countabjadShared; $b++)
			{
				$sheet->setCellValue($abjadShared[$b].$z, $dataHeader[$b]);
				$sheet->getColumnDimension($abjadShared[$b])->setAutoSize(true);
				$sheet->getStyle($abjadShared[$b].$z)->getFont()->setBold(true);
			}
            
            // isian
			$karyawan = $this->model->report();
			$x = 3;
			foreach($karyawan as $k)
			{
                //explode data pendidikan
                $jenjang = explode(" || ", $k['jenjang']);
                $jurusan = explode(" || ", $k['jurusan']);
                $instansi = explode(" || ", $k['instansi']);
                $tahun = explode(" || ", $k['tahun_pendidikan']);
                $nilai = explode(" || ", $k['nilai']);

                //explode data pengalaman kerja
                $namaPerusahaan = explode(" || ", $k['nama_perusahaan']);
                $tahunPengalaman = explode(" || ", $k['tahun_pengalaman']);
                $jabatanPengalaman = explode(" || ", $k['jabatan_pengalaman']);

                //explode data pelatihan kerja
                $namaPelatihan = explode(" || ", $k['nama_pelatihan']);
                $penyelenggara = explode(" || ", $k['penyelenggara']);
                $noSertifikat = explode(" || ", $k['no_sertifikat']);
                $masaBerlakuSertifikat = explode(" || ", $k['masa_berlaku_sertifikat']);

                //explode data kemampuan bahasa
                $bahasa = explode(" || ", $k['bahasa']);
                $pendengaran = explode(" || ", $k['pendengaran']);
                $membaca = explode(" || ", $k['membaca']);
                $lisan = explode(" || ", $k['lisan']);
                $tulisan = explode(" || ", $k['tulisan']);

                //explode data susunan keluarga
                $namaKeluarga = explode(" || ", $k['nama_keluarga']);
                $jkKeluarga = explode(" || ", $k['jk_keluarga']);
                $tmpLahirKeluarga = explode(" || ", $k['tmp_lahir_keluarga']);
                $tglLahirKeluarga = explode(" || ", $k['tgl_lahir_keluarga']);
                $pendidikanTerakhir = explode(" || ", $k['pendidikan_terakhir']);
                $pekerjaan = explode(" || ", $k['pekerjaan']);
                $alamatKeluarga = explode(" || ", $k['alamat_keluarga']);
                $noHpKeluarga = explode(" || ", $k['no_hp_keluarga']);

                //explode data identitas diri
                $jenisIdentitas = explode(" || ", $k['jenis_identitas']);
                $noIdentitas = explode(" || ", $k['no_identitas']);
                $masaBerlakuIdentitas = explode(" || ", $k['masa_berlaku_identitas']);

				$looping = [
                    $k['npk'], $k['nama_lengkap'], $k['nama_panggilan'], $k['departemen'], $k['bagian'],$k['jabatan'], $k['tgl_masuk'], $k['agama'], $k['kewarganegaraan'], $k['jenis_kelamin'], $k['tmp_lahir'], $k['tgl_lahir'], $k['status_kawin'], $k['hobi'], $k['gol_darah'], $k['tinggi_badan'], $k['berat_badan'], $k['ukuran_kemeja'], $k['ukuran_celana'], $k['ukuran_sepatu'], $k['alamat_asal'], $k['domisili'], $k['no_hp'], $k['email'], $k['sosmed'], $jenjang[0], $jurusan[0], $instansi[0], $tahun[0], $nilai[0], $jenjang[1], $jurusan[1], $instansi[1], $tahun[1], $nilai[1], $jenjang[2], $jurusan[2], $instansi[2], $tahun[2], $nilai[2], $namaPerusahaan[0], $tahunPengalaman[0], $jabatanPengalaman[0], $namaPerusahaan[1], $tahunPengalaman[1], $jabatanPengalaman[1], $namaPerusahaan[2], $tahunPengalaman[2], $jabatanPengalaman[2], $namaPelatihan[0], $penyelenggara[0], $noSertifikat[0], $masaBerlakuSertifikat[0], $namaPelatihan[1], $penyelenggara[1], $noSertifikat[1], $masaBerlakuSertifikat[1], $namaPelatihan[2], $penyelenggara[2], $noSertifikat[2], $masaBerlakuSertifikat[2], $bahasa[0], $pendengaran[0], $membaca[0], $lisan[0], $tulisan[0], $bahasa[1], $pendengaran[1], $membaca[1], $lisan[1], $tulisan[1], $bahasa[2], $pendengaran[2], $membaca[2], $lisan[2], $tulisan[2], $namaKeluarga[0], $jkKeluarga[0], $tmpLahirKeluarga[0], $tglLahirKeluarga[0], $pendidikanTerakhir[0], $pekerjaan[0], $alamatKeluarga[0], $noHpKeluarga[0], $namaKeluarga[1], $jkKeluarga[1], $tmpLahirKeluarga[1], $tglLahirKeluarga[1], $pendidikanTerakhir[1], $pekerjaan[1], $alamatKeluarga[1], $noHpKeluarga[1], $namaKeluarga[2], $jkKeluarga[2], $tmpLahirKeluarga[2], $tglLahirKeluarga[2], $pendidikanTerakhir[2], $pekerjaan[2], $alamatKeluarga[2], $noHpKeluarga[2], $namaKeluarga[3], $jkKeluarga[3], $tmpLahirKeluarga[3], $tglLahirKeluarga[3], $pendidikanTerakhir[3], $pekerjaan[3], $alamatKeluarga[3], $noHpKeluarga[3], $namaKeluarga[4], $jkKeluarga[4], $tmpLahirKeluarga[4], $tglLahirKeluarga[4], $pendidikanTerakhir[4], $pekerjaan[4], $alamatKeluarga[4], $noHpKeluarga[4], $jenisIdentitas[0], $noIdentitas[0], $masaBerlakuIdentitas[0], $jenisIdentitas[1], $noIdentitas[1], $masaBerlakuIdentitas[1], $jenisIdentitas[2], $noIdentitas[2], $masaBerlakuIdentitas[2]
                ];
                    
                  
				for($b=0; $b<$countabjadShared; $b++)
				{
					$sheet->setCellValue($abjadShared[$b].$x, $looping[$b]);
				}
				$x++;
            }
            
			$writer = new Xlsx($spreadsheet);
			$filename = 'Biodata Karyawan';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');
    }
    



}
