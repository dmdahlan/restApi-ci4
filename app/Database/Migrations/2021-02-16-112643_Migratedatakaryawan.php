<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migratedatakaryawan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'		       => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true,],
			'nama'  	       => ['type' => 'VARCHAR', 'constraint' => '255',],
			'telp'  	       => ['type' => 'VARCHAR', 'constraint' => '50', null => true,],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('karyawan');
	}

	public function down()
	{
		$this->forge->dropTable('karyawan');
	}
}
