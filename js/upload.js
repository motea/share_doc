$(function() {
	'use strict';
	
	//$('#file_submit').attr("disabled","disabled");

	$('#fileupload').fileupload({
		url : 'server/php',
		dataType : 'json',
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
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

