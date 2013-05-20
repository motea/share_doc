<form class="form-horizontal" action="./index.php/login" method="post">
	<div class="control-group">
		<label class="control-label" for="inputEmail">学号：</label>
		<div class="controls">
			<input type="text" id="inputEmail" placeholder="Email" name="userid">
		</div>
		<label >（管理员，老师用注册账号）</label>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputPassword">密码：</label>
		<div class="controls">
			<input type="password" id="inputPassword" placeholder="Password" name="password">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<label class="checkbox">
				<input type="checkbox" name="remember">
				记住我 </label>
			<button type="submit" class="btn">
				登陆
			</button>
		</div>
	</div>
</form>