$(function() {
	'use strict';
	var __selector = 
	{
		'college_of_computer_science':{
			'ccs_java':'Java程序设计',
			'ccs_javaweb':'javaweb'
			
		},
		'college_of_science':{
			'high_math':'高等数学'
		},
		'college_of_foreign_language':{
			'english_2':'大学英语2'
		},
		'business_and_economics':{
			
		}
	};
	
	//$('#file_submit').attr("disabled","disabled");
	$('#select_college').blur(function() {
		//alert($('#select_college').val());
		var college = $('#select_college').val();
		var subjects = __selector[college];
		var $select_subjects = $('#select_subject');
		$select_subjects.empty();
		
		for(var index in subjects){
			var temp_option = $('<option value="'+index+'">'+subjects[index]+'</option>');
			$select_subjects.append(temp_option);
		}
	});
	
	$('input[name=file_title]').blur(function() {
		//alert($('input[name=file_title]').text());
		if($('input[name=file_title]').val() == ''){
			alert('文件标题不能为空');
		}
	});

	$('#fileupload').fileupload({
		url : 'server/php',
		dataType : 'json',
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png|pdf|docx?|pptx?)$/i,
		maxFileSize : 5000000, // 5 MB

	}).on('fileuploadprogressall', function(e, data) {
		var progress = parseInt(data.loaded / data.total * 100, 10);
		$('#progress .bar').css('width', progress + '%');
		
	}).on('fileuploaddone', function(e, data) {
		//#这个实在上传成功的时候调用

		$('#upload_button span').remove();
		$('#upload_button').append('<p>success</p>');
		$('#file_submit').removeAttr('disabled');
		
		$('#file_realname').val(data.result.files[0].name);
		
	}).on('fileuploadprocessalways', function (e, data) {
		//这个会做文件类型检测之类的东西
        var index = data.index,
        file = data.files[index];

        if (file.error) {
			$('#upload_button').append(file.error);
			return;
        };
        
        
    }).on('fileuploadfail', function(e, data) {
		$.each(data.result.files, function(index, file) {
			var error = $('<span/>').text(file.error);
			$(data.context.children()[index]).append('<br>').append(error);
		});
		
	});

});

