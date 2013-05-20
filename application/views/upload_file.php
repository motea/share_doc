<html>
	<head>
		<meta charset="utf-8">
		<title>Upload Example</title>

		<link rel="stylesheet" href="/share_doc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/share_doc/css/jquery.fileupload-ui.css">

	</head>
	<body style="text-align: center">
		
		<div id="top" style="height: 110px;width: 850px;background-color: grey;position: relative;margin: auto"></div>
		
		<div class="container" style="width: 850px;height: 600px;background: yellow;position: relative;margin: auto">
			<!-- 主体部分放上传文件的表单，右侧放好友列表-->
			
		</div>

		<div style="width: 500px" >
			<div id="want_hide">
				<span class="btn btn-success fileinput-button"> <i class="icon-plus icon-white"></i> <span>上传文件</span> <!-- The file input field used as target for the file upload widget -->
					<input id="fileupload" type="file" name="files[]" data-url="/share_doc/server/php/" multiple>
				</span>
			</div>
			<div id="progress" class="progress progress-success progress-striped">
				<div class="bar"></div>
			</div>

			<div id="file_info" style="">
				<form action="/share_doc/index.php/uploadfile/upload" method="post">
					标题：
					<input type="text" name="title" id="input_title" />
					<br />
					描述：
					<input type="text" name="describe" />
					<br />
					<select>
						<option value="">计算机</option>
						<option value="" selected>化材</option>
					</select>

					<input type="submit" value="submit" />
				</form>
			</div>
		</div>

		<div id="footer"></div>



		<script src="/share_doc/js/jquery-1.9.1.min.js"></script>
		<script src="/share_doc/js/vendor/jquery.ui.widget.js"></script>
		<script src="/share_doc/js/jquery.iframe-transport.js"></script>
		<script src="/share_doc/js/jquery.fileupload.js"></script>
		<script src="/share_doc/js/upload.js"></script>

	</body>
</html>