<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UploadFile extends CI_Controller {
	
	
	function __construct() {
		parent::__construct();
	}
	
	public function index() {
		
		//echo "hello upload file page";
		$this->load->view('upload_file');
	}
	
	public function upload(){
		$filename = $_POST['title'];
		if(rename("./server/php/files/{$filename}", "./server/{$filename}")){
			echo "success";
		};
		
	}
}