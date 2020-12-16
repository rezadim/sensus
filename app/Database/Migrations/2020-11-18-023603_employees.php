<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employees extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_employe' => [
				'type'=>'BIGINT',
				'constraint'=>100,
				'unsigned'=>true,
				'null'=>true,
				'auto_increment'=>true
			],
			'npk' => [
				'type'=>'BIGINT',
				'constraint'=>100
			],
			'nama_lengkap' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'nama_panggilan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'departemen' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'bagian' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'jabatan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'tgl_masuk' => [
				'type'=>'DATE'
			],
			'agama' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'kewarganegaraan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'jenis_kelamin' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'tmp_lahir' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'tgl_lahir' => [
				'type'=>'DATE'
			],
			'status_kawin' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'hobi' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'gol_darah' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'tinggi_badan' => [
				'type'=>'INT',
				'constraint'=>100
			],
			'berat_badan' => [
				'type'=>'INT',
				'constraint'=>100
			],
			'ukuran_kemeja' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'ukuran_celana' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'ukuran_sepatu' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'alamat_asal' => [
				'type'=>'TEXT'
			],
			'domisili' => [
				'type'=>'TEXT',
				'null'=>true
			],
			'no_hp' => [
				'type'=>'VARCHAR',
				'constraint'=>'100',
				'null'=>true
			],
			'email' => [
				'type'=>'VARCHAR',
				'constraint'=>'100',
				'null'=>true
			],
			'sosmed' => [
				'type'=>'VARCHAR',
				'constraint'=>'100',
				'null'=>true
			]
		]);
		$this->forge->addKey('id_employe', true);
		$this->forge->createTable('biodata');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
