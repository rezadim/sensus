<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Education extends Migration
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
			'jenjang' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'jurusan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100',
				'null'=>true
			],
			'instansi' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'tahun_pendidikan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'nilai' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			]
		]);
		$this->forge->addForeignKey('id_employe', 'biodata', 'id_employe', 'CASCADE', 'CASCADE');
		$this->forge->createTable('pendidikan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
