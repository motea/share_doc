<html>
	<head>
		<meta charset="utf-8">
		<title>Upload Example</title>

		<link rel="stylesheet" href="/share_doc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/share_doc/css/jquery.fileupload-ui.css">

	</head>
	<body>
		
		
		<div class="container">
			<h3 class="muted">share</h3>
			<div class="navbar">
				<div class="navbar-inner" style="padding: 0">
					<div class="container">
						<ul class="nav">
							<li class="active">
								<a href="#">文档</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container" >
			<!-- 主体部分放上传文件的表单，右侧放好友列表-->
			<div  style="width:600px ;float: left">
				
				<div class="upload_button" style="width:150px;height: 20px;float:left;">
					<span class="btn btn-success fileinput-button"> <i class="icon-plus icon-white"></i> <span>上传文件</span> <!-- The file input field used as target for the file upload widget -->
						<input id="fileupload" type="file" name="files[]" data-url="/share_doc/server/php/" multiple>
					</span>
				</div>
				
				<div class="upload_progress_bar" style="width: 400px;padding-top:10px">
					<div id="progress" class="progress progress-success progress-striped" style="">
						<div class="bar"></div>
					</div>	
				</div>
				
				<!--下面是表单内容-->
				
				<div class="upload_file_information" style="width: 500px;float: left">
					<form action="/share_doc/index.php/uploadfile/upload" method="post">
						<fieldset>
							<legend>
								文件信息（请认真填写！）
							</legend>
							<label>文件标题：</label>
							<input type="text" placeholder="取个好点的，吸引目光" style="height: 30px">
							<label>学院：</label>
							<span class="help-block">这个不会被记录数据库，只是方便筛选学科</span>
							<select id="select_college">
								<option>计算机</option>
								<option>理学</option>
								<option>外语</option>
								<option>经贸</option>
							</select>
							<label>学科：</label>
							<select id="select_subject">
								<option>xx</option>
							</select>
							
							<textarea name="file_describe" id="myEditor">……</textarea>
							
							<button type="submit" class="btn">
								完成
							</button>
						</fieldset>
					</form>

				</div>
				
			</div>
			
			
			<!--这个是右侧部分，放联系人好了-->
		</div>


		<div id="footer"></div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="/share_doc/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.com/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/share_doc/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="/share_doc/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="/share_doc/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image resize plugin -->
<script src="/share_doc/js/jquery.fileupload-resize.js"></script>
<!-- The File Upload validation plugin -->
<script src="/share_doc/js/jquery.fileupload-validate.js"></script>

<script src="/share_doc/bootstrap/js/bootstrap.min.js"></script>
<script src="/share_doc/ueditor/editor_config.js"></script>
<script src="/share_doc/ueditor/editor_all.js"></script>


		<script src="/share_doc/js/upload.js"></script>
		
		<script>
			var editor = new UE.ui.Editor();
    		editor.render("myEditor");
    		//1.2.4以后可以使用一下代码实例化编辑器
    		//UE.getEditor('myEditor')
		</script>


	</body>
</html>