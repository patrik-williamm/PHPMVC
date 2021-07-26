<?php 

class About extends Controller {
	public function index(string $nama='', int $age=0, string $status='') 
	{
		$data['nama'] = $nama;
		$data['age'] = $age;
		$data['status'] = $status;
		$data['title'] = 'About';
		parent::view('templates/header', $data);
		parent::view('about/index', $data);
		parent::view('templates/footer');
		
	}

	public function my(string $nama='', int $umur=0, int $semester=0) 
	{
		$data['nama'] = $nama;
		$data['umur'] = $umur;
		$data['semester'] = $semester;
		$data['title'] = 'About';
		parent::view('templates/header', $data);
		parent::view('about/okok', $data);
		parent::view('templates/footer');
	}

}