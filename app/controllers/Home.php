<?php 

class Home extends Controller {

	public function index() {
		$data['title'] = 'Dashboard';
		parent::view('templates/header', $data);
		parent::view('home/index');
		parent::view('templates/footer');
	} 

	public function my() {
		$data['title'] = 'my';
		$data['name'] = parent::model('User_models')->getUser();
		parent::view('templates/header', $data);
		parent::view('home/my', $data);
		parent::view('templates/footer');
	} 
}