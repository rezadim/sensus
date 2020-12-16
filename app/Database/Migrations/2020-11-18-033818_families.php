<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Families extends Migration
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
			'hubungan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'nama_keluarga' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'jk_keluarga' => [
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
			'pendidikan_terakhir' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'pekerjaan' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'alamat_keluarga' => [
				'type'=>'TEXT'
			],
			'no_hp_keluarga' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			]
		]);
		$this->forge->addForeignKey('id_employe', 'biodata', 'id_employe', 'CASCADE', 'CASCADE');
		$this->forge->createTable('susunan_keluarga');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
