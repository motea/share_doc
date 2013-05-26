<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UploadFile extends CI_Controller {
	
	
	function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		//echo "hello upload file page";
		$this->load->view('upload_file');
	}
	
	public function upload(){
		
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('file_title','文件标题','required');
		$this->form_validation->set_rules('college','学院','required');
		$this->form_validation->set_rules('subject','学科','required');
		//$this->form_validation->set_rules('file_describe','文件描述','required');
		$this->form_validation->set_rules('file_realname','文件都没传就提交……','required');
		
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('upload_file');
		}else{
			$file_title = $_POST['file_title'];
			$select_subject = $_POST['subject'];
			$file_describe = $_POST['file_describe'];
			$file_realname = $_POST['file_realname'];
			
			$file_tmp = split('\.', $file_realname);
			$file_type = $file_tmp[count($file_tmp)-1];
			$base_path = "/share_doc/server/php/"; 
			
			$file_hash = sha1_file("/share_doc/server/php/files/{$file_realname}");
			
			if ($file_hash == '') {
				echo 'hash 过程出错';//到时候把错误信息传给一个error_view
			} else {
				//这里开始移动文件
				$file_path = "";
				if (rename($oldname, $newname)) {
					
				} else {
					
				}
				
				
			}
			
		}
		
		
		
	}
}