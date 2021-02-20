<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Seederkaryawan extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'          => 'Raya',
				'telp'          => '0859993181',
			],
			[
				'nama'          => 'Ebi',
				'telp'          => '311133',
			],
		];

		$this->db->table('karyawan')->insertBatch($data);
	}
}
