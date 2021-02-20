<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
	protected $table                = 'karyawan';
	protected $primarykey			= 'id';
	protected $allowedFields		= ['nama', 'telp'];

	protected $validationRules = [
		'nama'	=> 'required',
		'telp'	=> 'required|numeric|min_length[4]|is_unique[karyawan.telp]',
	];
	protected $validationMessages = [
		'nama' => [
			'required' => 'nama harus di isi',
		],
		'telp' => [
			'required' => 'telp harus di isi',
			'min_length' => 'minimal 4 digit',
			'is_unique'	=> 'data suda ada',
		],
	];
}
