<?php

class Login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	function check($logindata){
		$user = $logindata['user'];
		$password = $logindata['password'];
		
		$_url = "http://user.zjut.com/api.php?app=passport&action=login&passport={$user}&password={$password}";
		$result = file_get_contents($_url);
		
		return $result;
		
	}
}