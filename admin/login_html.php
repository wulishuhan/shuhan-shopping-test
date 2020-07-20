<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body background="../img/03.jpg"> 
	<div id="login">
		<div class="login_top">
			商品管理系统
		</div>
		<form action="login.php" method="post" id="form">
			用户名：<input type="username" name="username"/><br>
			密码：<input type="password" name="password"/><br>
			<input type="submit" value="登陆"	style="margin-left: 50px;margin-top: 70px; width: 100px;height: 40px;"/>
		</form>
	</div>
	</body>
	<style type="text/css">
	#login{
		width: 400px;
		height: 400px;
		margin: 170px auto;
		border: solid 2px white;
		border-radius: 30px;
	}
	#login .login_top{
		width: 100%;
		height: 35px;
		font-size: 25px;
		margin-left: 128px;
		margin-top: 40px;
		color: whitesmoke;
		opacity: 0.8;
	}
	#form{
		width: 200px;
		height: 200px;
		margin-top: 40px;
		margin-left: 106px;

		color: whitesmoke;
		opacity: 0.8;
	}
	</style>


</html>

