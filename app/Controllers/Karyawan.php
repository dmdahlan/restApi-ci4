<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\KaryawanModel;

class Karyawan extends ResourceController
{
	// protected $model;
	// public function __construct()
	// {
	// 	$this->model = new KaryawanModel();
	// }
	protected $format = 'json';
	protected $modelName = 'App\Models\Karyawanmodel';
	public function index()
	{
		$data = [
			'message'	=> 'success',
			'data'		=> $this->model->findAll(),
		];
		return $this->response->setStatusCode(200)->setJSON($data);
	}
	public function show($id = null)
	{
		$data = [
			'message'	=> 'success',
			'data'		=> $this->model->find($id),
		];
		return $this->respond($data, 200);
	}
	public function create()
	{
		$input = $this->validate(
			$this->model->getValidationRules(),
			$this->model->getValidationMessages(),
		);
		if ($input) {
			$this->model->save(
				$this->request->getPost()
			);
			$response = [
				'message'	=> 'success'
			];
			return $this->respond($response, 201);
		} else {
			$response = [
				'message' => 'fail',
				'errors'  => $this->validator->getErrors()
			];
			return $this->respond($response, 422);
		}
	}
}
