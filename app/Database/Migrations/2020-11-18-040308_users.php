<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'=>'BIGINT',
				'constraint'=>100,
				'unsigned'=>true,
				'null'=>true,
				'auto_increment'=>true
			],
			'username' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'password' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'level' => [
				'type'=>'VARCHAR',
				'constraint'=>'100'
			],
			'status' => [
				'type'=>'VARCHAR',
				'constraint'=>'100',
				'null'=>true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
