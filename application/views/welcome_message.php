<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="/share_doc/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/share_doc/css/zz_css.css">
</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			<a href="#" class = "brand">ShareDoc</a>
			<ul class = "nav">
				<li class = "active"><a href="#">home</a></li>
				<li><a href="#">xx1</a></li>
			</ul>
		</div>
		
	</div>

	<div class="container">
		<div class="alert">
			<button type = "button" class = "close" data-dismiss = "alert">&times;</button>
			<strong>这货只是个测试！</strong>
		</div>

		<div class="zz-line">
			<div id = "zz-contain-recommend" class = "well">
				<p>这里放推荐内容。</p>
			</div>


			<div id="zz-contain-login" >
				<?php
					include 'login.php';
				?>
			</div>
		</div>

		<div class="zz-line">
			<div id="zz-"></div>

		</div>


	</div>

	
	<script type="text/javascript" src="/share_doc/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/share_doc/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>