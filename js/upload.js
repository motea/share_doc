$(function() {
	'use strict';
	$('#file_info').hide();

	var url = (window.location.hostname === 'blueimp.github.com' || window.location.hostname === 'blueimp.github.io') ? '//jquery-file-upload.appspot.com/' : 'server/php/', uploadButton = $('<button/>').addClass('btn').prop('disabled', true).text('Processing...').on('click', function() {
		var $this = $(this), data = $this.data();
		$this.off('click').text('Abort').on('click', function() {
			$this.remove();
			data.abort();
		});
		data.submit().always(function() {
			$this.remove();
		});
	}); 

	$('#fileupload').fileupload({
		dataType : 'json',
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
		maxFileSize : 5000000, // 5 MB

	}).on('fileuploadprogressall', function(e, data) {
		var progress = parseInt(data.loaded / data.total * 100, 10);
		$('#progress .bar').css('width', progress + '%');
		
	}).on('fileuploaddone', function(e, data) {
		$.each(data.result.files, function(index, file) {
			$('#input_title').val(file.name);
			if (file.error != null) {
				alert(file.error);
			}
		});

		$('#file_info').show();

		$("#want_hide").hide();
		//alert(data.result.files[0].name);

	}).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index];



        if (file.error) {
			$('#if_success').text(file.error);
        };


        
    }).on('fileuploadfail', function(e, data) {
		$.each(data.result.files, function(index, file) {
			var error = $('<span/>').text(file.error);
			$(data.context.children()[index]).append('<br>').append(error);
		});
		
	}).on('fileuploadadd', function(e, data){
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
	});

});

