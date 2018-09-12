<?php 

class MY_Controller extends CI_Controller{

	function __Construct(){
		parent::__Construct();
	}
}

class Admin_Controller extends MY_Controller{
	function __Construct(){
		parent::__Construct();
		echo 'this is admin controller';
	}
}

class Public_Controller extends MY_Controller{
	function __Construct(){
		parent::__Construct();
		echo 'this is public controller';
	}
}


 ?>