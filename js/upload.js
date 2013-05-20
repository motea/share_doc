$(function () {
	'use strict';
	$('#file_info').hide();
	
    $('#fileupload').fileupload({
        dataType: 'json',
        //accept_file_types: /(\.|\/)(gif|jpe?g|png)$/i,这句没用？！
    	//autoUpload: false,
    	maxFileSize:20000000,
    	
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('#input_title').val(file.name);
                if(file.error != null){
                	alert(file.error);	
                }            	
            });
            
            $('#file_info').show();
            
            $("#want_hide").hide();
            
            
        },
        
		progressall: function (e, data) {
			var progress = parseInt(data.loaded / data.total * 100, 10);
			$('#progress .bar').css('width', progress + '%');
		},
    	fileuploadfail: function(e,data){
    		$.each(data.result.files, function(index, file) {
    			var error = $('<span/>').text(file.error);
            	$(data.context.children()[index])
                	.append('<br>')
                	.append(error);
			});
    	}
    	
    });
});

