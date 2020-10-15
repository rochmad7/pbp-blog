<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idkategori'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'tgl_insert' => [
				'type'           => 'DATETIME',
				'null'     		 => true,
			],
			'tgl_update' => [
				'type'           => 'DATETIME',
				'null'     		 => true,
			],
		]);
		$this->forge->addKey('idkategori', true);
		$this->forge->createTable('kategori');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('kategori');
	}
}
