<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'                => [
				'type'           => 'INT',
				'constraint' => 11,
				'unsigned'  => true,
				'auto_increment' => true,
				'comment' => 'Primary Key',
			],
			'name'         => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'comment' => 'Name',
			],
			'email'     => [
				'type'             => 'VARCHAR',
				'constraint'   => '255',
				'comment' => 'Email Address'
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
