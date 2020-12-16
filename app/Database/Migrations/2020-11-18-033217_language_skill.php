<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LanguageSkill extends Migration
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
			'bahasa' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'pendengaran' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'membaca' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'lisan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'tulisan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			]
		]);
		$this->forge->addForeignKey('id_employe', 'biodata', 'id_employe', 'CASCADE', 'CASCADE');
		$this->forge->createTable('kemampuan_bahasa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
