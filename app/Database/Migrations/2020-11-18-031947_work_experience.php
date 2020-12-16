<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WorkExperience extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([
			'id_employe' => [
				'type'=>'BIGINT',
				'constraint'=>100,
				'unsigned'=>true,
				'null'=>true
			],
			'nama_perusahaan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'tahun_pengalan_kerja' => [
				'type'=>'VARCHAR',
				'constraint'=>100
			],
			'jabatan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			]
		]);
		$this->forge->addForeignKey('id_employe', 'biodata', 'id_employe', 'CASCADE', 'CASCADE');
		$this->forge->createTable('pengalaman_kerja');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
