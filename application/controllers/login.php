<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		
		//是否填写用户，交给前端验证

		if (!isset($_POST['userid'])) {
			$user = '';
		}else{
			$user = $_POST['userid'];
		}
		
		if (!isset($_POST['password'])) {
			$pwd = '';
		}else{
			$pwd = $_POST['password'];
		}
		
		if (isset($_POST['remember'])) {
			$remember = $_POST['remember'];	
		}else{
			$remember = 'off';
		}
		
		
		//把获得到的user做验证
		$user_data = array(
			'user' => $user,
			'password' => $pwd,
		 );
		
		$this->load->model('Login_model');
		
		$loginStatus = $this->Login_model->check($user_data);
		
		echo $loginStatus;
		
	}

}
