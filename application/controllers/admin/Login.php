<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin_COntroller{

	public function index(){
		$this->load->view('admin/login/index');
	}
}

 ?>