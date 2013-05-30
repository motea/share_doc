
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UploadedFile{
	var $file_name;
	var $file_hash;
	var $file_type;
	var $file_description;
	var $file_uploader_id;
	var $file_uploaded_date;
	var $file_status = 0;//默认状态0，表示未审核
	var $file_like = 0;//赞的人数
	var $file_hate = 0;//踩的人数
	var $file_down_count = 0;
	var $file_tags;
	
	
	public function __construct($file_data_array){
		//检查传入的数组这步就先不做了
		$this->file_name = $file_data_array['file_name'];
		$this->file_hash = $file_data_array['file_hash'];
		$this->file_type = $file_data_array['file_type'];
		$this->file_description = $file_data_array['file_description'];
		$this->file_uploader_id = $file_data_array['file_uploader_id'];
		$this->file_uploaded_date = $file_data_array['file_uploaded_date'];
		$this->file_status = $file_data_array['file_status'];
		$this->file_like = $file_data_array['file_like'];
		$this->file_hate = $file_data_array['file_hate'];
		$this->file_down_count = $file_data_array['file_down_count'];
		$this->file_tags = $file_data_array['file_tags'];
		
		return $this;
	}
	
	
} 