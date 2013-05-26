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
		
		$file_title = $_POST['file_title'];
		$select_college = $_POST['college'];
		$select_subject = $_POST['subject'];
		$file_describe = $_POST['file_describe'];
		$file_realname = $_POST['file_realname'];
		
		echo $file_title;
		echo "<br/>";
		echo $file_describe;
		echo "<br/>";
		echo $select_college;
		echo "<br/>";
		echo "{$select_subject}";
		echo $file_realname;
		
	}
}