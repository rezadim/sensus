<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $biodata = [
		"npk" => 'required'
		// "nama_lengkap" => $this->request->getPost('nama'),
		// "nama_panggilan" => $this->request->getPost('panggilan'),
		// "departemen" => $this->request->getPost('departemen'),
		// "bagian" => $this->request->getPost('bagian'),
		// "jabatan" => $this->request->getPost('jabatan'),
		// "tgl_masuk" => $this->request->getPost('tgl_masuk'),
		// "agama" => $this->request->getPost('agama'),
		// "kewarganegaraan" => $this->request->getPost('kewarganegaraan'),
		// "jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
		// "tmp_lahir" => $this->request->getPost('tempat_lahir'),
		// "tgl_lahir" => $this->request->getPost('tgl_lahir'),
		// "status_kawin" => $this->request->getPost('status'),
		// "hobi" => $this->request->getPost('hobi'),
		// "tinggi_badan" => $this->request->getPost('tinggi'),
		// "berat_badan" => $this->request->getPost('berat'),
		// "ukuran_kemeja" => $this->request->getPost('ukemeja'),
		// "ukuran_celana" => $this->request->getPost('ucelana'),
		// "ukuran_sepatu" => $this->request->getPost('usepatu'),
		// "gol_darah" => $this->request->getPost('gol_darah'),
		// "alamat_asal" => $this->request->getPost('alamat'),
		// "domisili" => $this->request->getPost('domisili'),
		// "no_hp" => $this->request->getPost('nohp'),
		// "email" => $this->request->getPost('email'),
		// "sosmed" => 'FB: '.$this->request->getPost('sosmed').', IG: '.$this->request->getPost('sosmed2')
	];
	public $biodata_errors = [
		'npk' => ['required' => 'NPK harus diisi']
	];
	
	public $pendidikan = [
		'jenjang' => 'required'
	];
	public $pendidikan_errors = [
		'jenjang' => ['required' => 'Jenjang harus diisi']
	];

	public $pengalaman = [
		'nama_perusahaan' => 'required'
	];
	public $pengalaman_errors = [
		'nama_perusahaan' => ['required' => 'Jenjang harus diisi']
	];

	public $pelatihan = [
		'nama_pelatihan' => 'required'
	];
	public $pelatihan_errors = [
		'nama_pelatihan' => ['required' => 'Nama Pelatihan harus diisi']
	];

	public $kemampuan_bhs = [
		'bahasa' => 'required'
	];
	public $kemampuan_bhs_errors = [
		'bahasa' => ['required' => 'Bahasa harus diisi']
	];

	public $keluarga = [
		'nama_keluarga' => 'required'
	];
	public $keluarga_errors = [
		'nama_keluarga' => ['required' => 'Nama Pelatihan harus diisi']
	];

	public $identitas = [
		'jenis_identitas' => 'required'
	];
	public $identitas_errors = [
		'jenis_identitas' => ['required' => 'Nama Pelatihan harus diisi']
	];

	public $authlogin = [
		'username' => 'required',
		'password' => 'required'
	];
	public $authlogin_errors = [
		'username' => [
			'required' => 'Username harus diisi'
		],
		'password' => [
			'required' => 'Password harus diisi'
		]
	];
}
