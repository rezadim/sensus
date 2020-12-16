<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Identities extends Migration
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
			'jenis_identitas' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'no_identitas' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'masa_berlaku_identitas' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			]
		]);
		$this->forge->addForeignKey('id_employe', 'biodata', 'id_employe', 'CASCADE', 'CASCADE');
		$this->forge->createTable('identitas_diri');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
