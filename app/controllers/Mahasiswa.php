<?php

class Mahasiswa extends Controller{

	public function index()
	{
		$data['title'] = 'Daftar Mahasiswa';
		$data['mhs'] = parent::model('mahasiswa_models')->getAllMhs();
		parent::view('templates/header', $data);
		parent::view('Mahasiswa/index', $data);
		parent::view('templates/footer');
	}

	public function detail($id=1)
	{
		$data['title'] = 'Detail';
		$data['mhs'] = parent::model('mahasiswa_models')->getDetail($id);
		parent::view('templates/header', $data);
		parent::view('Mahasiswa/detail', $data);
		parent::view('templates/footer');
	}

	public function tambah()
	{
		if ( parent::model('mahasiswa_models')->tambahDataMahasiswa($_POST) > 0 ) {
			header('location :'. URLBASE .'/Mahasiswa');
			exit;
		}
	}
}