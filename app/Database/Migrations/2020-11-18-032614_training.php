<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Training extends Migration
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
			'nama_pelatihan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'penyelenggara' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'no_sertifikat' => [
				'type'=>'VARCHAR',
				'constraint'=>'100',
			],
			'masa_berlaku_sertifikat' => [
				'type'=>'DATE'
			]
		]);
		$this->forge->addForeignKey('id_employe', 'biodata', 'id_employe', 'CASCADE', 'CASCADE');
		$this->forge->createTable('pelatihan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
